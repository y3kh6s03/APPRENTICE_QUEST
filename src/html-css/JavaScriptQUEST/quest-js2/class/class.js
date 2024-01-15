

class Playlist {

    #songs = [];

    constructor(playlist){
        this.playlist = playlist;
    }

    addSong(song){
        this.#songs.push(song);
        return this;
    }

    removeSong(song){
        this.#songs = this.#songs.filter((item)=>{
            return item !== song;
        })
        return this;
    }

    play(){
        const playSong = this.#songs[0];
        const result = `再生中：${playSong}`;
        return result;
    }
}
let myPlaylist = new Playlist('お気に入りリスト');
myPlaylist.addSong('Lemon');
myPlaylist.addSong('花束');
console.log(myPlaylist.play()); // 再生中: Lemon
myPlaylist.removeSong('Lemon');
console.log(myPlaylist.play()); // 再生中：花束
