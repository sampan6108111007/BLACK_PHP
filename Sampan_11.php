<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($black=1; $black <= 7; $black++)
            {
                 for ($sampan=1; $sampan <= $black; $sampan++)
                {
                    echo (" ");
                }
                for ($sampan=6; $sampan >= $black; $sampan--)
                {
                    echo (($sampan-1)%2);
                }
                echo (($black)%2);
                
                for ($sampan=$black; $sampan <= 6; $sampan++)
                {
                    echo (($sampan-1)%2);
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>
