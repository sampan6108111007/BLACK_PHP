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
            for ($black=1; $black <= 4; $black++)
            {
             
                 for ($sampan=4; $sampan >= $black; $sampan--)
                {
                    echo " ";
                }
                    echo $black;
                 for ($sampan=2; $sampan <= $black; $sampan++)
                {
                    echo "**";
                }
                    echo $black;
            
            echo "\n";
            }
            
             for ($black=2; $black <= 4; $black++)
            {
             
                 for ($sampan=1; $sampan <= $black; $sampan++)
                {
                    echo " ";
                }
                    echo 5-$black;
                 for ($sampan=3; $sampan >= $black; $sampan--)
                {
                    echo "**";
                }
                    echo 5-$black;
            
            echo "\n";
            }
        ?>
    </pre>
</body>
