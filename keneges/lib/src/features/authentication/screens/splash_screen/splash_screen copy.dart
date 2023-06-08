// ignore_for_file: prefer_const_constructors, prefer_const_literals_to_create_immutables

import 'package:Keneges/src/constants/image_strings.dart';
import 'package:Keneges/src/constants/sizes.dart';
import 'package:Keneges/src/constants/text_strings.dart';
import 'package:flutter/material.dart';

class SplashScreen extends StatelessWidget {
  const SplashScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Stack(
        children: [
          Positioned(
            top: 0,
            left: 0,
            child: Image(image: AssetImage(uSplashTopIcon)),
          ),
          Positioned(
            top: 80,
            left: uDefaultSize,
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(
                  uAppName,
                  style: Theme.of(context).textTheme.headline3,
                ),
                Text(
                  uAppTagLine,
                  style: Theme.of(context).textTheme.headline2,
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }
}
