document.addEventListener('DOMContentLoaded', function() {
    const wordsToHighlight = {};

    fetch('views/themen/t99.php')
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const blocks = doc.querySelectorAll('.block-text-absatz');

            blocks.forEach(block => {
                const id = block.getAttribute('id');
                const content = block.textContent.trim();
                const firstLine = content.split('\n')[0];
                const term = firstLine.replace(':', '').trim();

                if (id && term) {
                    wordsToHighlight[term] = content;
                }
            });

            applyHighlighting(wordsToHighlight);
        })
        .catch(error => {
            console.error('Error fetching the page:', error);
        });

    function applyHighlighting(wordsToHighlight) {
        const previewBox = document.createElement('div');
        previewBox.className = 'preview-box';
        document.body.appendChild(previewBox);

        function highlightWords(node) {
            if (node.nodeType === 3) { // Text node
                const text = node.nodeValue;
                let replacedText = text;

                Object.keys(wordsToHighlight).forEach(word => {
                    const regex = new RegExp(`\\b(${word})\\b`, 'gi');
                    replacedText = replacedText.replace(regex, `<span class="highlight" data-word="${word}">$1</span>`);
                });

                if (replacedText !== text) {
                    const newNode = document.createElement('span');
                    newNode.innerHTML = replacedText;
                    node.parentNode.replaceChild(newNode, node);
                }
            } else if (node.nodeType === 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
                for (let i = 0; i < node.childNodes.length; i++) {
                    highlightWords(node.childNodes[i]);
                }
            }
        }

        highlightWords(document.body);

        document.body.addEventListener('mouseover', function(event) {
            if (event.target.classList.contains('highlight')) {
                const word = event.target.getAttribute('data-word');
                previewBox.textContent = wordsToHighlight[word];
                previewBox.style.top = `${event.pageY + 10}px`;
                previewBox.style.left = `${event.pageX + 10}px`;
                previewBox.classList.add('active');
            }
        });

        document.body.addEventListener('mousemove', function(event) {
            if (previewBox.classList.contains('active')) {
                previewBox.style.top = `${event.pageY + 10}px`;
                previewBox.style.left = `${event.pageX + 10}px`;
            }
        });

        document.body.addEventListener('mouseout', function(event) {
            if (event.target.classList.contains('highlight')) {
                previewBox.classList.remove('active');
            }
        });
    }
});
