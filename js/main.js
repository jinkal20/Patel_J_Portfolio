(()=>{
    
    const vm = new Vue({
        el: '#app',
        data: {
            mainmessage : "",
            videodata: [],
            singlemoviedata: [],
            showDetails : false,
            workdata:[],
            Name: ["Hello I'm","JINKAL PATEL"],
            quote: ["“Whitespace is like air: it is necessary for design to breathe.”"],
            Development: ["HTML","CSS","Javascript"],
            Desiging : ["Photopshop","Illustrator","InDesign","AfterEffects"]
            
        },
        created : function(){
            this.fetchData(null);
        },
        methods : {
            fetchData(movie) {
                url = movie ? `./includes/index.php?movie=${movie}` : './includes/index.php';
                fetch(url)
                .then(res => res.json())
                .then(data => {
                    
                    if (movie){
                        console.log("drf");
                        //console.log(data);
                        this.singlemoviedata =data;
                    } else {
                        console.log("drf");
                       // console.log(data[0]);
                        this.videodata =data[0];
                        this.workdata = data[1];
                    }
                })
            }
        }
    });
})();