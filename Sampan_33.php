<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($black=1; $black <= 3; $black++)
            {
                for ($sampan=3; $sampan >= $black; $sampan--)
                {
                    echo (" ");
                }
                echo ("*");
                for ($sampan=1; $sampan <= $black; $sampan++)
                {
                    echo ($black);
                }
                for ($sampan=2; $sampan <= $black; $sampan++)
                {
                    echo ($black);
                }
                echo ("*");
                
            echo ("\n");
            }
            for ($black=1; $black <= 2; $black++)
            {
                for ($sampan=1; $sampan <= $black+1; $sampan++)
                {
                    echo (" ");
                }
                echo ("*");
                for ($sampan=$black; $sampan <= 2; $sampan++)
                {
                    echo (3-$black);
                }
                for ($sampan=$black; $sampan <= 1; $sampan++)
                {
                    echo (3-$black);
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>