<script>
        const animatedText = document.getElementById('animatedText');
        let colorIndex = 0;

        function changeColor() {
            const colors = ['red', 'green', 'blue', 'orange']; // Add more colors as needed
            animatedText.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
        }

        // Change text color every 1000 milliseconds (1 second)
        setInterval(changeColor, 1000);
    </script>