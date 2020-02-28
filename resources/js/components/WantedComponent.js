import React from 'react';
import ReactDOM from 'react-dom';

export default class Wanted extends React.Component {
    constructor(props) {
       super(props);
       this.state={
        data:"Hallo world",
        tags:[1,2,3,4,5]
       }
    }


    render() {

        return (
<div className="card">{this.state.data}
<ul>
{this.state.tags.map(tag=>{
    return (<li key={tag+Math.random()*10}>{tag}</li>)
})}
</ul>
</div>
            )
    }
}

if (document.getElementById('wanted')) {
    ReactDOM.render(<Wanted />, document.getElementById('wanted'));
}