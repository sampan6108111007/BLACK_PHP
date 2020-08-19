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
             echo$black,$black+4;
                 for ($sampan=1; $sampan <= $black+4; $sampan++)
                {
                    echo "*";
                }
            echo "\n";
            }
        ?>
    </pre>
</body>
