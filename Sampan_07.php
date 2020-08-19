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
            for ($black=1; $black <= 5; $black++)
            {
                for ($sampan=1; $sampan <= $black; $sampan++)
                {
                    echo (" ");
                }
                 for ($sampan=0; $sampan < 2 ; $sampan++)
                {
                    echo ($sampan+$black);
                }
                for ($sampan=4; $sampan >= $black; $sampan--)
                {
                    echo (" ");
                }
                for ($sampan=4; $sampan >= $black; $sampan--)
                {
                    echo (" ");
                }
                for ($sampan=1; $sampan < 3; $sampan++)
                {
                    echo ((($black+1)*2)-($sampan+$black));
                }
            
            
                echo ("\n");
            }
        ?>
    </pre>
</body>