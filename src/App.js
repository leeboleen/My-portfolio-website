import React from 'react';
import Container from 'react-bootstrap/Container';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
import Button from 'react-bootstrap/Button';

class App extends React.Component {
  
  constructor(props) {
    super(props);
    this.state = {
      title: 'Lee Barnes',
      headerLinks: [
        { title: 'Home', path: '/' },
        { title: 'Projects', path: '/' },
        { title: 'About', path: '/' },
        { title: 'Contact', path: '/' }
      ],
      Home: {
        title: 'Lee Barnes',
        subTitle: 'Front-End Developer',
        subText: 'Below are some of my projects!'
      },
      Projects: {
        title: 'My Projects',
        subTitle: 'The projects in my portfolio are heavily front-end focused, of which utilize a range of languages and structures such as, HTML, CSS, JS, React, PHP (with MVC) and so on... ',
      },
      About: {
        title: 'About Me',
        subTitle: 'I am a Front-End Developer, with...',
      },
      Contact: {
        title: 'My Details',
        subText: 'Phone: ...'
      }
    }
  }

  render() {
    return (
      <Router>
        <Container className="p-0" fluid={true}>
          <p>hello</p>
        </Container>
      </Router>
      );
  }
}

export default App;