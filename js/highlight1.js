
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.hover-link');
    const previewBox = document.createElement('div');
    previewBox.className = 'preview-box';
    document.body.appendChild(previewBox);

    links.forEach(link => {
        link.addEventListener('mouseover', function(event) {
            const url = link.getAttribute('href').split('#')[0];
            const targetId = link.getAttribute('href').split('#')[1];

            if (url && targetId) {
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const targetElement = doc.getElementById(targetId);
                        
                        if (targetElement) {
                            const previewText = targetElement.innerText || targetElement.textContent;
                            previewBox.textContent = previewText.substring(0, 1000); // Limit preview to 100 characters
                        }

                        previewBox.style.top = `${event.pageY + 10}px`;
                        previewBox.style.left = `${event.pageX + 10}px`;
                        previewBox.classList.add('active');
                    })
                    .catch(error => {
                        console.error('Error fetching the page:', error);
                    });
            }
        });

        link.addEventListener('mousemove', function(event) {
            previewBox.style.top = `${event.pageY + 10}px`;
            previewBox.style.left = `${event.pageX + 10}px`;
        });

        link.addEventListener('mouseout', function() {
            previewBox.classList.remove('active');
        });
    });
});