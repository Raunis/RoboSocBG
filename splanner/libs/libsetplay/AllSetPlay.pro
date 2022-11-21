#-------------------------------------------------
#
# Project created by QtCreator 2011-03-15T17:14:56
#
#-------------------------------------------------

QT       += core gui

TARGET = AllSetPlay
TEMPLATE = app

DEPENDPATH += setPlayGUI \
               setPlayGUI/tests \
               setPlayGUI/images

INCLUDEPATH += setPlayGUI \
               setPlayGUI/tests \
               setPlayGUI/images \
                .libs/libsetplay

LIBS += -L -lsetplay

SOURCES += main.cpp\
        mainwindow.cpp \
    setPlayGUI/spplayer.cpp \
    setPlayGUI/spfield.cpp \
    setPlayGUI/spaction.cpp \
    setPlayGUI/spsetplay.cpp \
    setPlayGUI/sptransition.cpp \
    setPlayGUI/spstep.cpp \
    setPlayGUI/spgraph.cpp \
    setPlayGUI/spplayereditordialog.cpp \
    setPlayGUI/sppoint.cpp \
    setPlayGUI/spinitdialog.cpp \
    setPlayGUI/spporting.cpp \
    setPlayGUI/spoutprogram.cpp \
    setPlayGUI/spshowgame.cpp \
    setPlayGUI/sprelativepositiondialog.cpp \
    setPlayGUI/rcsslog/qt4/angle_deg.cpp \
    setPlayGUI/rcsslog/qt4/ball_painter.cpp \
    setPlayGUI/rcsslog/qt4/circle_2d.cpp \
    setPlayGUI/rcsslog/qt4/disp_holder.cpp \
    setPlayGUI/rcsslog/qt4/field_canvas.cpp \
    setPlayGUI/rcsslog/qt4/line_2d.cpp \
    setPlayGUI/rcsslog/qt4/log_player.cpp \
    setPlayGUI/rcsslog/qt4/log_player_tool_bar.cpp \
    setPlayGUI/rcsslog/qt4/log_slider_tool_bar.cpp \
    setPlayGUI/rcsslog/qt4/main_data.cpp \
    setPlayGUI/rcsslog/qt4/options.cpp \
    setPlayGUI/rcsslog/qt4/player_painter.cpp \
    setPlayGUI/rcsslog/qt4/vector_2d.cpp \
    setPlayGUI/rcsslog/rcsslogplayer/gzfstream.cpp \
    setPlayGUI/rcsslog/rcsslogplayer/parser.cpp \
    setPlayGUI/rcsslog/rcsslogplayer/types.cpp \
    setPlayGUI/rcsslog/rcsslogplayer/util.cpp \
    setPlayGUI/portingClasses/spfcportugalporting.cpp \
    setPlayGUI/outProgramsClasses/sptestrcsoccersim.cpp \
    setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayer.cpp \
    setPlayGUI/outProgramsClasses/sptestrcsoccersimconfigdialog.cpp \
    setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayerconfigdialog.cpp


HEADERS  += mainwindow.h \
    setPlayGUI/spsetplay.h \
    setPlayGUI/spplayer.h \
    setPlayGUI/spfield.h \
    setPlayGUI/spaction.h \
    setPlayGUI/spsetplay.h \
    setPlayGUI/sptransition.h \
    setPlayGUI/spstep.h \
    setPlayGUI/spdefinitions.h \
    setPlayGUI/spgraph.h \
    setPlayGUI/spplayereditordialog.h \
    setPlayGUI/spinitdialog.h \
    setPlayGUI/sppoint.h \
    setPlayGUI/spporting.h \
    setPlayGUI/spoutprogram.h \
    setPlayGUI/spshowgame.h \
    setPlayGUI/rcsslog/qt4/angle_deg.h \
    setPlayGUI/rcsslog/qt4/ball_painter.h \
    setPlayGUI/rcsslog/qt4/circle_2d.h \
    setPlayGUI/rcsslog/qt4/disp_holder.h \
    setPlayGUI/rcsslog/qt4/field_canvas.h \
    setPlayGUI/rcsslog/qt4/line_2d.h \
    setPlayGUI/rcsslog/qt4/log_player.h \
    setPlayGUI/rcsslog/qt4/log_player_tool_bar.h \
    setPlayGUI/rcsslog/qt4/log_slider_tool_bar.h \
    setPlayGUI/rcsslog/qt4/main_data.h \
    setPlayGUI/rcsslog/qt4/mouse_state.h \
    setPlayGUI/rcsslog/qt4/options.h \
    setPlayGUI/rcsslog/qt4/painter_interface.h \
    setPlayGUI/rcsslog/qt4/player_painter.h \
    setPlayGUI/rcsslog/qt4/vector_2d.h \
    setPlayGUI/rcsslog/rcsslogplayer/gzfstream.h \
    setPlayGUI/rcsslog/rcsslogplayer/handler.h \
    setPlayGUI/rcsslog/rcsslogplayer/parser.h \
    setPlayGUI/rcsslog/rcsslogplayer/types.h \
    setPlayGUI/rcsslog/rcsslogplayer/util.h \
    setPlayGUI/portingClasses/spfcportugalporting.h \
    setPlayGUI/outProgramsClasses/sptestrcsoccersim.h \
    setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayer.h \    
    setPlayGUI/outProgramsClasses/sptestrcsoccersimconfigdialog.h \
    setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayerconfigdialog.h


FORMS    += mainwindow.ui \
    setPlayGUI/spsetplay.ui \
    setPlayGUI/spplayereditordialog.ui \
    setPlayGUI/spinitdialog.ui \
    setPlayGUI/outProgramsClasses/sptestrcsoccersimconfigdialog.ui \
    setPlayGUI/outProgramsClasses/spdebugfcpdebuglogplayerconfigdialog.ui \
    setPlayGUI/sprelativepositiondialog.ui

OTHER_FILES += \
    setPlayGUI/images/ball.png \
    setPlayGUI/tests/ballKickOff2.conf \
    setPlayGUI/images/tshirt.png \
    setPlayGUI/images/tshirt2.png \
    setPlayGUI/images/tshirtSelected.png \
    setPlayGUI/images/tshirtGhost.png \
    setPlayGUI/rcsslog/qt4/rcsslogplayer.rc \
    setPlayGUI/images/configuration_edit.png \
    setPlayGUI/images/vision.jpeg

#rcsslog
INCLUDEPATH += . ..
win32 {
  INCLUDEPATH += ../../zlib123-dll/include
  INCLUDEPATH += ../../boost
}
unix {
  INCLUDEPATH += /opt/local/include
}
macx {
  INCLUDEPATH += /opt/local/include
}

LIBS +=

DEFINES += HAVE_LIBZ
win32 {
  DEFINES += HAVE_WINDOWS_H
}
unix {
  DEFINES += HAVE_NETINET_IN_H
}
macx {
  DEFINES += HAVE_NETINET_IN_H
}

RESOURCES += \
    images.qrc
