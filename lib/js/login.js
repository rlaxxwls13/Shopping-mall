const sendit = () => {
    const userid = document.getElementById('userid');
    const userpw = document.getElementById('userpw');

    // userid값이 비어있으면 실행.
    if(userid.value == '') {
        alert('아이디를 입력해주세요.');
        userid.focus();
        return false;
    }

    // userpw값이 비어있으면 실행.
    if(userpw.value == '') {
        alert('비밀번호를 입력해주세요.');
        userpw.focus();
        return false;
    }
}