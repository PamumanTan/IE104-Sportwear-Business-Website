const rating = document.querySelector('.rating');
const addReviewStar = (num) => {
    for (let i = 0; i < num; i++) {
        let star = document.createElement('img');
        star.src = "../../assets/images/star.svg";
        rating.appendChild(star);
    }
}
addReviewStar(5);

const voteYes = document.getElementById('vote-yes');
const voteNo = document.getElementById('vote-no');
const upvoteButtons = document.querySelectorAll('.upvote a');
for (let upvote of upvoteButtons) {
    upvote.addEventListener('click', () => {
        if (upvote.id === 'yes') {
            let val = parseInt(voteYes.innerText.match(/\d+/g)[0]);
            voteYes.innerText = `(${val + 1})`;
        }
        else {
            let val = parseInt(voteNo.innerText.match(/\d+/g)[0]);
            voteNo.innerText = `(${val + 1})`;
        }
    })
}
