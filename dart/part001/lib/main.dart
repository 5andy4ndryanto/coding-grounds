import 'package:flutter/material.dart';

// void main() => runApp(
//    MaterialApp(
//         home: Text("hey ninjas !..")
//     )
// );

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
            body: Center(
                // child: Text(
                //     'hello ninjas!',
                //     style: TextStyle(
                //         fontSize: 20.0,
                //         fontWeight: FontWeight.bold,
                //         letterSpacing: 2.0,
                //         color: Colors.grey[600],
                //         fontFamily: 'IndieFlower',
                //     ),
                // )
                // child: Image.asset('assets/background.jpg'),
                // child: Icon(
                //     Icons.airport_shuttle,
                //     color: Colors.lightBlue,
                //     size: 50.0
                // ),
                // child: ElevatedButton(
                //     onPressed: (){
                //         print("you clicked me");
                //     },
                //     child: Text('click me')
                // ),
                // child: ElevatedButton.icon(
                //     onPressed: (){},
                //     icon: Icon(
                //         Icons.mail
                //     ),
                //     label: Text('mail me'),
                //     style: ElevatedButton.styleFrom(
                //         primary: Colors.amber
                //     ),
                // ),
                child: IconButton(
                    onPressed: (){
                        print("Click !!");
                    },
                    icon: Icon(Icons.alternate_email),
                    color: Colors.amber
                )
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