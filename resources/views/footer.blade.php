<script src="https://cdn.jsdelivr.net/npm/jquery-tagcanvas@2.9.0/tagcanvas.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.onload = function () {
        try {
            TagCanvas.Start('tag-cloud-canvas', 'tag-cloud-list', {
                textColour: '#8dc256',
                outlineColour: '#7ab141',
                reverse: true,
                depth: 0.8,
                maxSpeed: 0.05
            });
        } catch (e) {
            if (document.getElementById('tag-cloud-container')) {
                document.getElementById('tag-cloud-container').style.display = 'none';
            }
        }
    };
</script>
