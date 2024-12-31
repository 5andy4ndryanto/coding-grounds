import 'package:flutter/material.dart';
import 'package:part005/pages/choose_location.dart';
import 'package:part005/pages/home.dart';
import 'package:part005/pages/loading.dart';

void main() => runApp(MaterialApp(
      initialRoute: '/',
      routes: {
        '/': (context) => Loading(),
        '/home': (context) => Home(),
        '/location': (context) => ChooseLocation()
      },
    ));
