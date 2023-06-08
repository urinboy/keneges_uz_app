import 'package:Keneges/src/pages/my_home_page.dart';
import 'package:flutter/material.dart';
import 'package:Keneges/src/utils/theme/theme.dart';
// import 'package:Keneges/src/screens/splash_screen.dart';

void main() {
  //   SystemChrome.setSystemUIOverlayStyle(const SystemUiOverlayStyle(
  //   statusBarColor: Colors.transparent
  // ));
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Keneges.uz',
      theme: UAppTheme.lightTheme,
      darkTheme: UAppTheme.darkTheme,
      themeMode: ThemeMode.system,
      home: const MyHomePage(),
      // home: SplashScreen(),
    );
  }
}
