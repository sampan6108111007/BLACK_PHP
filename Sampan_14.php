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
            for ($black=1; $black <= 4; $black++){
                for ($sampan=$black; $sampan <= $black+2; $sampan++){
                echo $sampan;
               }
               for ($sampan=1; $sampan <= ($black + 2); $sampan++){
                echo "*";
               }
               echo "<br/>";
               }
        ?>
    </pre>
</body>
