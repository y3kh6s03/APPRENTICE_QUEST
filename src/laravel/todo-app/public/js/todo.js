const deleteBtns = document.querySelectorAll('.delete');
const deleteForm = document.querySelectorAll('.delete_form');
deleteBtns.forEach(deleteBtn => {
    deleteBtn.addEventListener('click',(e)=>{
        if(confirm('本当に削除してもいいですか？')){
            deleteForm.submit();
        }
    })
});
