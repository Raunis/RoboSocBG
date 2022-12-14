cmake_minimum_required(VERSION 3.9)
project(fcportugalsplanner)

set(CMAKE_CXX_STANDARD 11)

add_executable(fcportugalsplanner
        setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayer.cpp
        setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayer.h
        setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayerconfigdialog.cpp
        setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayerconfigdialog.h
        setPlayGUI/outProgramsClasses/sptestrcsoccersim.cpp
        setPlayGUI/outProgramsClasses/sptestrcsoccersim.h
        setPlayGUI/outProgramsClasses/sptestrcsoccersimconfigdialog.cpp
        setPlayGUI/outProgramsClasses/sptestrcsoccersimconfigdialog.h
        setPlayGUI/portingClasses/spfcportugalporting.cpp
        setPlayGUI/portingClasses/spfcportugalporting.h
        setPlayGUI/rcsslog/qt4/angle_deg.cpp
        setPlayGUI/rcsslog/qt4/angle_deg.h
        setPlayGUI/rcsslog/qt4/ball_painter.cpp
        setPlayGUI/rcsslog/qt4/ball_painter.h
        setPlayGUI/rcsslog/qt4/circle_2d.cpp
        setPlayGUI/rcsslog/qt4/circle_2d.h
        setPlayGUI/rcsslog/qt4/disp_holder.cpp
        setPlayGUI/rcsslog/qt4/disp_holder.h
        setPlayGUI/rcsslog/qt4/field_canvas.cpp
        setPlayGUI/rcsslog/qt4/field_canvas.h
        setPlayGUI/rcsslog/qt4/line_2d.cpp
        setPlayGUI/rcsslog/qt4/line_2d.h
        setPlayGUI/rcsslog/qt4/log_player.cpp
        setPlayGUI/rcsslog/qt4/log_player.h
        setPlayGUI/rcsslog/qt4/log_player_tool_bar.cpp
        setPlayGUI/rcsslog/qt4/log_player_tool_bar.h
        setPlayGUI/rcsslog/qt4/log_slider_tool_bar.cpp
        setPlayGUI/rcsslog/qt4/log_slider_tool_bar.h
        setPlayGUI/rcsslog/qt4/main_data.cpp
        setPlayGUI/rcsslog/qt4/main_data.h
        setPlayGUI/rcsslog/qt4/mouse_state.h
        setPlayGUI/rcsslog/qt4/options.cpp
        setPlayGUI/rcsslog/qt4/options.h
        setPlayGUI/rcsslog/qt4/painter_interface.h
        setPlayGUI/rcsslog/qt4/player_painter.cpp
        setPlayGUI/rcsslog/qt4/player_painter.h
        setPlayGUI/rcsslog/qt4/vector_2d.cpp
        setPlayGUI/rcsslog/qt4/vector_2d.h
        setPlayGUI/rcsslog/rcsslogplayer/gzfstream.cpp
        setPlayGUI/rcsslog/rcsslogplayer/gzfstream.h
        setPlayGUI/rcsslog/rcsslogplayer/handler.h
        setPlayGUI/rcsslog/rcsslogplayer/parser.cpp
        setPlayGUI/rcsslog/rcsslogplayer/parser.h
        setPlayGUI/rcsslog/rcsslogplayer/types.cpp
        setPlayGUI/rcsslog/rcsslogplayer/types.h
        setPlayGUI/rcsslog/rcsslogplayer/util.cpp
        setPlayGUI/rcsslog/rcsslogplayer/util.h
        setPlayGUI/spaction.cpp
        setPlayGUI/spaction.h
        setPlayGUI/spdefinitions.h
        setPlayGUI/spfield.cpp
        setPlayGUI/spfield.h
        setPlayGUI/spgraph.cpp
        setPlayGUI/spgraph.h
        setPlayGUI/spinitdialog.cpp
        setPlayGUI/spinitdialog.h
        setPlayGUI/spoutprogram.cpp
        setPlayGUI/spoutprogram.h
        setPlayGUI/spplayer.cpp
        setPlayGUI/spplayer.h
        setPlayGUI/spplayereditordialog.cpp
        setPlayGUI/spplayereditordialog.h
        setPlayGUI/sppoint.cpp
        setPlayGUI/sppoint.h
        setPlayGUI/spporting.cpp
        setPlayGUI/spporting.h
        setPlayGUI/sprelativepositiondialog.cpp
        setPlayGUI/spsetplay.cpp
        setPlayGUI/spsetplay.h
        setPlayGUI/spshowgame.cpp
        setPlayGUI/spshowgame.h
        setPlayGUI/spstep.cpp
        setPlayGUI/spstep.h
        setPlayGUI/sptransition.cpp
        setPlayGUI/sptransition.h
        main.cpp
        mainwindow.cpp
        mainwindow.h
        moc_field_canvas.cpp
        moc_log_player.cpp
        moc_log_player_tool_bar.cpp
        moc_log_slider_tool_bar.cpp
        moc_mainwindow.cpp
        moc_spdebugfcpdebuglogplayer.cpp
        moc_spdebugfcpdebuglogplayerconfigdialog.cpp
        moc_spfield.cpp
        moc_spgraph.cpp
        moc_spinitdialog.cpp
        moc_spoutprogram.cpp
        moc_spplayereditordialog.cpp
        moc_spplayertabinformation.cpp
        moc_spporting.cpp
        moc_spsetplay.cpp
        moc_spshowgame.cpp
        moc_sptestrcsoccersim.cpp
        moc_sptestrcsoccersimconfigdialog.cpp
        qrc_images.cpp
        ui_mainwindow.h
        ui_spdebugfcpdebuglogplayerconfigdialog.h
        ui_spinitdialog.h
        ui_spplayereditordialog.h
        ui_sprelativepositiondialog.h
        ui_spsetplay.h
        ui_sptestrcsoccersimconfigdialog.h)
