import 'package:flutter/material.dart';

void main() => runApp(MaterialApp(
    home: Home(),
));

class Home extends StatelessWidget{
    @override
    Widget build(BuildContext context){
        return Scaffold(
            appBar: AppBar(
                title: Text('my first app'),
                centerTitle: true,
                backgroundColor: Colors.red[600]
            ),
            // body: Container(
            //   // padding: EdgeInsets.all(20.0),
            //   // padding: EdgeInsets.symmetric(
            //   //   horizontal: 30.0,
            //   //   vertical: 10.0
            //   // ),
            //   padding: EdgeInsets.fromLTRB(10.0, 20.0, 30.0, 40.0),
            //   margin: EdgeInsets.all(30.0),
            //   color: Colors.grey[400],
            //   child: Text("hello")
            // ),
            // body: Row(
            //   mainAxisAlignment: MainAxisAlignment.spaceEvenly,
            //   crossAxisAlignment: CrossAxisAlignment.start,
            //   children: <Widget>[
            //      Text('hello world'),
            //      ElevatedButton(
            //         onPressed: (){
            //             print("you clicked me");
            //         },
            //         child: Text('click me'),
            //         style: ElevatedButton.styleFrom(
            //             primary: Colors.amber
            //         ),
            //      ),
            //      Container(
            //         color: Colors.cyan,
            //         padding: EdgeInsets.all(30.0),
            //         child: Text('inside container')
            //      ),
            //   ],
            // ),
            // body: Column(
            //   children: <Widget>[
            //      Container(
            //         padding: EdgeInsets.all(20.0),
            //         color: Colors.cyan,
            //         child: Text('one')
            //      ),
            //     Container(
            //         padding: EdgeInsets.all(30.0),
            //         color: Colors.pinkAccent,
            //         child: Text('two')
            //      ),
            //     Container(
            //         padding: EdgeInsets.all(20.0),
            //         color: Colors.amber,
            //         child: Text('three')
            //      )
            //   ],
            // ),
            body: Row(
              children: <Widget>[
                  Expanded(
                     flex: 1,
                     child: Container(
                        padding: EdgeInsets.all(30.0),
                        color: Colors.cyan,
                        child: Text('1')
                     ),
                  ),       
                  Expanded(
                     flex: 1,
                     child: Container(
                        padding: EdgeInsets.all(30.0),
                        color: Colors.pinkAccent,
                        child: Text('2')
                     ),
                  ),     
                  Expanded(
                     flex: 1,
                     child: Container(
                        padding: EdgeInsets.all(30.0),
                        color: Colors.amber,
                        child: Text('3')
                     ),
                  ),           
              ],
            ),
            floatingActionButton: FloatingActionButton(
                onPressed: (){

                },
                child: Text('click'),
                backgroundColor: Colors.red[600],
            ),
        );
    }
}