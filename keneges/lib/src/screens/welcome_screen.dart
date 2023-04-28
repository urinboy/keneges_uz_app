// ignore_for_file: prefer_const_literals_to_create_immutables, prefer_const_constructors

import 'package:flutter/material.dart';

class WelcomeScreen extends StatelessWidget {
  const WelcomeScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.blue[600],
      body: Scaffold(
        body: SingleChildScrollView(
          child: Center(
            child: Column(
              children: [Text("Welcome PAge")],
            ),
          ),
        ),
      ),
    );
  }
}
