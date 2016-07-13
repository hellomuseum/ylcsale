<?php
class upload {
    //定义变量，存放上传文件信息
    private $upfile;
    //只能上传png的图片
    private $uptype1 = 'image/jpeg';
    private $uptype2 = 'image/gif';
    private $uptype3 = 'image/pjpeg';
    private $uptype4 = 'image/x-png';

    //上传大小不超过500K
    private $upsize = 512000;

    /*
     * 构造函数，在实例化pload对象会被执行，参数$file为上传控制名称
     * 实例化对象时，构造函数会取得上传文件信息并赋给upfile类成员变量
     */
    public function __construct($file) {
        $this->upfile = $_FILES[$file];
    }

    //检查文件类型
    private function checkType(){
        if ($this->upfile['type'] == $this->uptype1 
	or $this->upfile['type'] == $this->uptype2 
	or $this->upfile['type'] == $this->uptype3 
	or $this->upfile['type'] == $this->uptype4) {
		return true;
	}else{
        	return false;
	}
    }

    //检查文件大小
    private function checkSize(){
        if($this->upfile['size'] > $this->upsize) return false;
        return true;
    }

    //上传文件函数
    public function uploadFile(){

        //查检文件是类型是否正确
        if(!$this->checkType()) {
            echo '文件格式不正确';return false;
        }

        //检查文件大小
        if(!$this->checkSize()) {
            echo '文件大小不符合规定';return false;
        }
        //将上传的文件移到新位置
	$location="./image/";
        if (move_uploaded_file($this->upfile["tmp_name"],$location.$this->upfile["name"])){
            echo ("<script type='text/javascript'> alert('上传成功！');history.go(-1);</script>");
        }else{
            echo '上传失败';
        }
    }
}

if(!empty($_POST['upload'])) {
for($num=1;$num<$_POST['number']+1;$num++){
	$fi = 'upload'.$num;
	$upload = new upload($fi);
	$upload->uploadFile();
	unset($upload);
	}
}


?>
