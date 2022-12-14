// -*-c++-*-

/*!
  \file log_player.h
  \brief log player class Header File.
*/

/*
 *Copyright:

 Copyright (C) The RoboCup Soccer Server Maintenance Group.
 Hidehisa AKIYAMA

 This code is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2, or (at your option)
 any later version.

 This code is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this code; see the file COPYING.  If not, write to
 the Free Software Foundation, 675 Mass Ave, Cambridge, MA 02139, USA.

 *EndCopyright:
 */

/////////////////////////////////////////////////////////////////////

#ifndef RCSSLOGPLAYER_LOG_PLAYER_H
#define RCSSLOGPLAYER_LOG_PLAYER_H
#include <rcsslog/rcsslogplayer/types.h>
#include <QObject>

class QTimer;

class MainData;

class LogPlayer
    : public QObject {

    Q_OBJECT

    struct Param {
        int x_; //!< screen X coordinates
        int y_; //!< screen Y coordinates
        int body_radius_; //!< pixel body radius
        int kick_radius_; //!< pixel kick area radius
        int draw_radius_; //!< pixel main draw radius.
        bool have_full_effort_; //!< flag to check effort value
        const rcss::rcg::PlayerT & player_;
        const rcss::rcg::BallT & ball_;
        const rcss::rcg::PlayerTypeT & player_type_;

        Param( const rcss::rcg::PlayerT & player,
               const rcss::rcg::BallT & ball,
               const rcss::rcg::ServerParamT & sparam,
               const rcss::rcg::PlayerTypeT & ptype );
    private:
        //! not used
        Param();
    };

private:

    MainData & M_main_data;

    QTimer * M_timer;

    //! if true, replay direction is forward
    bool M_forward;

    //! if true, latest monitor view data is drawn.
    bool M_live_mode;

    // not used
    LogPlayer();
    LogPlayer( const LogPlayer & );
    const LogPlayer & operator=( const LogPlayer & );
public:

    LogPlayer( MainData & main_data );
    ~LogPlayer();

    bool isLiveMode() const;

private:

    void stepBackImpl();
    void stepForwardImpl();


private slots:

    void handleTimer();

public slots:

    void stepBack();
    void stepForward();

    void playOrStop();
    void stop();

    void playBack();
    void playForward();

    void accelerateBack();
    void accelerateForward();

    void goToPrevScore();
    void goToNextScore();

    void goToFirst();
    void goToLast();

    void decelerate();
    void accelerate();

    void goToIndex( int index );

    void goToCycle( int cycle );

    void showLive();

    void setLiveMode();

signals:

    void updated();

};

#endif
