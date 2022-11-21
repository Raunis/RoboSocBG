/********************************************************************************
** Form generated from reading UI file 'spsetplay.ui'
**
** Created by: Qt User Interface Compiler version 4.8.7
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_SPSETPLAY_H
#define UI_SPSETPLAY_H

#include <QtCore/QVariant>
#include <QtGui/QAction>
#include <QtGui/QApplication>
#include <QtGui/QButtonGroup>
#include <QtGui/QCheckBox>
#include <QtGui/QFrame>
#include <QtGui/QGridLayout>
#include <QtGui/QHBoxLayout>
#include <QtGui/QHeaderView>
#include <QtGui/QLabel>
#include <QtGui/QLineEdit>
#include <QtGui/QListWidget>
#include <QtGui/QPlainTextEdit>
#include <QtGui/QPushButton>
#include <QtGui/QSpacerItem>
#include <QtGui/QSpinBox>
#include <QtGui/QToolButton>
#include <QtGui/QVBoxLayout>
#include <QtGui/QWidget>
#include "spfield.h"
#include "spgraph.h"

QT_BEGIN_NAMESPACE

class Ui_SpSetPlay
{
public:
    QHBoxLayout *horizontalLayout_6;
    QVBoxLayout *verticalLayout;
    QLabel *label_5;
    QFrame *setPlayInformation;
    QGridLayout *gridLayout;
    QPlainTextEdit *comment;
    QHBoxLayout *horizontalLayout_4;
    QLabel *idLabel;
    QLineEdit *id;
    QCheckBox *invertible;
    QLabel *commentLabel;
    QHBoxLayout *horizontalLayout_5;
    QLabel *nameLabel;
    QLineEdit *name;
    QLabel *label_4;
    QFrame *acListMaximizeFrame;
    QHBoxLayout *horizontalLayout_3;
    QListWidget *abortConditionsList;
    QSpacerItem *horizontalSpacer;
    QLabel *label_3;
    QFrame *frameGraph;
    QVBoxLayout *verticalLayout_3;
    SpGraph *graph;
    QLabel *stepDetailsLabel;
    QFrame *stepInformation;
    QHBoxLayout *horizontalLayout_2;
    QLabel *label_2;
    QSpinBox *waitTime;
    QCheckBox *abortTimeCB;
    QSpinBox *abortTime;
    QVBoxLayout *verticalLayout_4;
    QWidget *logToolBar;
    QHBoxLayout *horizontalLayout;
    QFrame *frameField;
    QVBoxLayout *verticalLayout_7;
    SpField *field;
    QPushButton *showPlayerInfoButton;
    QFrame *playerInfoFrame;
    QHBoxLayout *horizontalLayout_7;
    QFrame *frame;
    QGridLayout *gridLayout_2;
    QLabel *playerInfoIdentificationNumber;
    QLabel *playerInfoIdentificationName;
    QSpacerItem *horizontalSpacer_2;
    QSpacerItem *horizontalSpacer_3;
    QLabel *playerInfoPositionLabel;
    QLabel *playerInfoActionLabel;
    QVBoxLayout *verticalLayout_2;
    QSpacerItem *verticalSpacer;
    QToolButton *editPlayerButton;

    void setupUi(QWidget *SpSetPlay)
    {
        if (SpSetPlay->objectName().isEmpty())
            SpSetPlay->setObjectName(QString::fromUtf8("SpSetPlay"));
        SpSetPlay->resize(931, 565);
        horizontalLayout_6 = new QHBoxLayout(SpSetPlay);
        horizontalLayout_6->setObjectName(QString::fromUtf8("horizontalLayout_6"));
        verticalLayout = new QVBoxLayout();
        verticalLayout->setSpacing(0);
        verticalLayout->setObjectName(QString::fromUtf8("verticalLayout"));
        label_5 = new QLabel(SpSetPlay);
        label_5->setObjectName(QString::fromUtf8("label_5"));
        QSizePolicy sizePolicy(QSizePolicy::Minimum, QSizePolicy::Maximum);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(label_5->sizePolicy().hasHeightForWidth());
        label_5->setSizePolicy(sizePolicy);
        label_5->setMinimumSize(QSize(300, 25));
        label_5->setMaximumSize(QSize(300, 25));
        QPalette palette;
        QBrush brush(QColor(255, 255, 255, 255));
        brush.setStyle(Qt::SolidPattern);
        palette.setBrush(QPalette::Active, QPalette::WindowText, brush);
        QBrush brush1(QColor(38, 38, 38, 255));
        brush1.setStyle(Qt::SolidPattern);
        palette.setBrush(QPalette::Active, QPalette::Button, brush1);
        QBrush brush2(QColor(85, 255, 0, 255));
        brush2.setStyle(Qt::SolidPattern);
        palette.setBrush(QPalette::Active, QPalette::Light, brush2);
        palette.setBrush(QPalette::Active, QPalette::Text, brush);
        QBrush brush3(QColor(255, 255, 127, 255));
        brush3.setStyle(Qt::SolidPattern);
        palette.setBrush(QPalette::Active, QPalette::BrightText, brush3);
        palette.setBrush(QPalette::Active, QPalette::ButtonText, brush);
        palette.setBrush(QPalette::Active, QPalette::Base, brush1);
        palette.setBrush(QPalette::Active, QPalette::Window, brush1);
        palette.setBrush(QPalette::Inactive, QPalette::WindowText, brush);
        palette.setBrush(QPalette::Inactive, QPalette::Button, brush1);
        palette.setBrush(QPalette::Inactive, QPalette::Light, brush);
        palette.setBrush(QPalette::Inactive, QPalette::Text, brush);
        palette.setBrush(QPalette::Inactive, QPalette::BrightText, brush3);
        palette.setBrush(QPalette::Inactive, QPalette::ButtonText, brush);
        palette.setBrush(QPalette::Inactive, QPalette::Base, brush1);
        palette.setBrush(QPalette::Inactive, QPalette::Window, brush1);
        palette.setBrush(QPalette::Disabled, QPalette::WindowText, brush);
        palette.setBrush(QPalette::Disabled, QPalette::Button, brush1);
        palette.setBrush(QPalette::Disabled, QPalette::Light, brush);
        palette.setBrush(QPalette::Disabled, QPalette::Text, brush);
        palette.setBrush(QPalette::Disabled, QPalette::BrightText, brush3);
        palette.setBrush(QPalette::Disabled, QPalette::ButtonText, brush);
        palette.setBrush(QPalette::Disabled, QPalette::Base, brush1);
        palette.setBrush(QPalette::Disabled, QPalette::Window, brush1);
        label_5->setPalette(palette);
        label_5->setStyleSheet(QString::fromUtf8("QLabel { background-color : rgb(38, 38, 38); color : white; }"));
        label_5->setAlignment(Qt::AlignCenter);
        label_5->setIndent(1);

        verticalLayout->addWidget(label_5);

        setPlayInformation = new QFrame(SpSetPlay);
        setPlayInformation->setObjectName(QString::fromUtf8("setPlayInformation"));
        QSizePolicy sizePolicy1(QSizePolicy::Maximum, QSizePolicy::Minimum);
        sizePolicy1.setHorizontalStretch(0);
        sizePolicy1.setVerticalStretch(0);
        sizePolicy1.setHeightForWidth(setPlayInformation->sizePolicy().hasHeightForWidth());
        setPlayInformation->setSizePolicy(sizePolicy1);
        setPlayInformation->setMinimumSize(QSize(300, 120));
        setPlayInformation->setMaximumSize(QSize(300, 200));
        QPalette palette1;
        QBrush brush4(QColor(85, 85, 255, 255));
        brush4.setStyle(Qt::SolidPattern);
        palette1.setBrush(QPalette::Active, QPalette::Text, brush4);
        palette1.setBrush(QPalette::Inactive, QPalette::Text, brush4);
        QBrush brush5(QColor(159, 158, 158, 255));
        brush5.setStyle(Qt::SolidPattern);
        palette1.setBrush(QPalette::Disabled, QPalette::Text, brush5);
        setPlayInformation->setPalette(palette1);
        setPlayInformation->setFrameShape(QFrame::Box);
        setPlayInformation->setFrameShadow(QFrame::Plain);
        setPlayInformation->setLineWidth(4);
        gridLayout = new QGridLayout(setPlayInformation);
        gridLayout->setSpacing(0);
        gridLayout->setContentsMargins(3, 3, 3, 3);
        gridLayout->setObjectName(QString::fromUtf8("gridLayout"));
        comment = new QPlainTextEdit(setPlayInformation);
        comment->setObjectName(QString::fromUtf8("comment"));
        QSizePolicy sizePolicy2(QSizePolicy::Maximum, QSizePolicy::MinimumExpanding);
        sizePolicy2.setHorizontalStretch(0);
        sizePolicy2.setVerticalStretch(0);
        sizePolicy2.setHeightForWidth(comment->sizePolicy().hasHeightForWidth());
        comment->setSizePolicy(sizePolicy2);
        comment->setMinimumSize(QSize(286, 40));
        comment->setMaximumSize(QSize(300, 150));
        comment->setFrameShape(QFrame::StyledPanel);
        comment->setFrameShadow(QFrame::Sunken);
        comment->setLineWidth(1);
        comment->setVerticalScrollBarPolicy(Qt::ScrollBarAsNeeded);
        comment->setCenterOnScroll(true);

        gridLayout->addWidget(comment, 2, 0, 1, 4);

        horizontalLayout_4 = new QHBoxLayout();
        horizontalLayout_4->setSpacing(1);
        horizontalLayout_4->setObjectName(QString::fromUtf8("horizontalLayout_4"));
        idLabel = new QLabel(setPlayInformation);
        idLabel->setObjectName(QString::fromUtf8("idLabel"));
        QSizePolicy sizePolicy3(QSizePolicy::Minimum, QSizePolicy::Preferred);
        sizePolicy3.setHorizontalStretch(0);
        sizePolicy3.setVerticalStretch(0);
        sizePolicy3.setHeightForWidth(idLabel->sizePolicy().hasHeightForWidth());
        idLabel->setSizePolicy(sizePolicy3);

        horizontalLayout_4->addWidget(idLabel);

        id = new QLineEdit(setPlayInformation);
        id->setObjectName(QString::fromUtf8("id"));
        QSizePolicy sizePolicy4(QSizePolicy::Fixed, QSizePolicy::Fixed);
        sizePolicy4.setHorizontalStretch(0);
        sizePolicy4.setVerticalStretch(0);
        sizePolicy4.setHeightForWidth(id->sizePolicy().hasHeightForWidth());
        id->setSizePolicy(sizePolicy4);
        id->setMinimumSize(QSize(34, 25));
        id->setMaximumSize(QSize(34, 25));
        id->setMouseTracking(false);
        id->setFrame(true);
        id->setAlignment(Qt::AlignCenter);

        horizontalLayout_4->addWidget(id);


        gridLayout->addLayout(horizontalLayout_4, 1, 2, 1, 1);

        invertible = new QCheckBox(setPlayInformation);
        invertible->setObjectName(QString::fromUtf8("invertible"));
        invertible->setMouseTracking(false);
        invertible->setLayoutDirection(Qt::RightToLeft);
        invertible->setCheckable(true);
        invertible->setChecked(true);

        gridLayout->addWidget(invertible, 1, 3, 1, 1);

        commentLabel = new QLabel(setPlayInformation);
        commentLabel->setObjectName(QString::fromUtf8("commentLabel"));
        commentLabel->setEnabled(true);

        gridLayout->addWidget(commentLabel, 1, 0, 1, 1);

        horizontalLayout_5 = new QHBoxLayout();
        horizontalLayout_5->setSpacing(1);
        horizontalLayout_5->setObjectName(QString::fromUtf8("horizontalLayout_5"));
        nameLabel = new QLabel(setPlayInformation);
        nameLabel->setObjectName(QString::fromUtf8("nameLabel"));

        horizontalLayout_5->addWidget(nameLabel);

        name = new QLineEdit(setPlayInformation);
        name->setObjectName(QString::fromUtf8("name"));
        QSizePolicy sizePolicy5(QSizePolicy::MinimumExpanding, QSizePolicy::Fixed);
        sizePolicy5.setHorizontalStretch(0);
        sizePolicy5.setVerticalStretch(0);
        sizePolicy5.setHeightForWidth(name->sizePolicy().hasHeightForWidth());
        name->setSizePolicy(sizePolicy5);
        name->setMinimumSize(QSize(170, 30));
        name->setMaximumSize(QSize(16777215, 30));
        name->setMouseTracking(false);
        name->setFrame(true);
        name->setAlignment(Qt::AlignLeading|Qt::AlignLeft|Qt::AlignVCenter);

        horizontalLayout_5->addWidget(name);


        gridLayout->addLayout(horizontalLayout_5, 0, 0, 1, 4);


        verticalLayout->addWidget(setPlayInformation);

        label_4 = new QLabel(SpSetPlay);
        label_4->setObjectName(QString::fromUtf8("label_4"));
        sizePolicy.setHeightForWidth(label_4->sizePolicy().hasHeightForWidth());
        label_4->setSizePolicy(sizePolicy);
        label_4->setMinimumSize(QSize(300, 25));
        label_4->setMaximumSize(QSize(300, 25));
        QPalette palette2;
        palette2.setBrush(QPalette::Active, QPalette::WindowText, brush);
        palette2.setBrush(QPalette::Active, QPalette::Button, brush1);
        palette2.setBrush(QPalette::Active, QPalette::Light, brush2);
        palette2.setBrush(QPalette::Active, QPalette::Text, brush);
        palette2.setBrush(QPalette::Active, QPalette::BrightText, brush3);
        palette2.setBrush(QPalette::Active, QPalette::ButtonText, brush);
        palette2.setBrush(QPalette::Active, QPalette::Base, brush1);
        palette2.setBrush(QPalette::Active, QPalette::Window, brush1);
        palette2.setBrush(QPalette::Inactive, QPalette::WindowText, brush);
        palette2.setBrush(QPalette::Inactive, QPalette::Button, brush1);
        palette2.setBrush(QPalette::Inactive, QPalette::Light, brush);
        palette2.setBrush(QPalette::Inactive, QPalette::Text, brush);
        palette2.setBrush(QPalette::Inactive, QPalette::BrightText, brush3);
        palette2.setBrush(QPalette::Inactive, QPalette::ButtonText, brush);
        palette2.setBrush(QPalette::Inactive, QPalette::Base, brush1);
        palette2.setBrush(QPalette::Inactive, QPalette::Window, brush1);
        palette2.setBrush(QPalette::Disabled, QPalette::WindowText, brush);
        palette2.setBrush(QPalette::Disabled, QPalette::Button, brush1);
        palette2.setBrush(QPalette::Disabled, QPalette::Light, brush);
        palette2.setBrush(QPalette::Disabled, QPalette::Text, brush);
        palette2.setBrush(QPalette::Disabled, QPalette::BrightText, brush3);
        palette2.setBrush(QPalette::Disabled, QPalette::ButtonText, brush);
        palette2.setBrush(QPalette::Disabled, QPalette::Base, brush1);
        palette2.setBrush(QPalette::Disabled, QPalette::Window, brush1);
        label_4->setPalette(palette2);
        label_4->setStyleSheet(QString::fromUtf8("QLabel { background-color : rgb(38, 38, 38); color : white; }"));
        label_4->setAlignment(Qt::AlignCenter);
        label_4->setIndent(1);

        verticalLayout->addWidget(label_4);

        acListMaximizeFrame = new QFrame(SpSetPlay);
        acListMaximizeFrame->setObjectName(QString::fromUtf8("acListMaximizeFrame"));
        sizePolicy1.setHeightForWidth(acListMaximizeFrame->sizePolicy().hasHeightForWidth());
        acListMaximizeFrame->setSizePolicy(sizePolicy1);
        acListMaximizeFrame->setMinimumSize(QSize(300, 68));
        acListMaximizeFrame->setMaximumSize(QSize(10, 16777215));
        acListMaximizeFrame->setFrameShape(QFrame::Box);
        acListMaximizeFrame->setFrameShadow(QFrame::Plain);
        acListMaximizeFrame->setLineWidth(4);
        horizontalLayout_3 = new QHBoxLayout(acListMaximizeFrame);
        horizontalLayout_3->setSpacing(0);
        horizontalLayout_3->setContentsMargins(0, 0, 0, 0);
        horizontalLayout_3->setObjectName(QString::fromUtf8("horizontalLayout_3"));
        abortConditionsList = new QListWidget(acListMaximizeFrame);
        QListWidgetItem *__qlistwidgetitem = new QListWidgetItem(abortConditionsList);
        __qlistwidgetitem->setCheckState(Qt::Unchecked);
        __qlistwidgetitem->setFlags(Qt::ItemIsUserCheckable|Qt::ItemIsEnabled);
        QListWidgetItem *__qlistwidgetitem1 = new QListWidgetItem(abortConditionsList);
        __qlistwidgetitem1->setCheckState(Qt::Unchecked);
        abortConditionsList->setObjectName(QString::fromUtf8("abortConditionsList"));
        QSizePolicy sizePolicy6(QSizePolicy::Maximum, QSizePolicy::Maximum);
        sizePolicy6.setHorizontalStretch(0);
        sizePolicy6.setVerticalStretch(0);
        sizePolicy6.setHeightForWidth(abortConditionsList->sizePolicy().hasHeightForWidth());
        abortConditionsList->setSizePolicy(sizePolicy6);
        abortConditionsList->setMinimumSize(QSize(270, 60));
        abortConditionsList->setMaximumSize(QSize(270, 60));
        QFont font;
        font.setPointSize(10);
        abortConditionsList->setFont(font);
        abortConditionsList->setFrameShape(QFrame::Box);
        abortConditionsList->setFrameShadow(QFrame::Plain);
        abortConditionsList->setLineWidth(0);
        abortConditionsList->setHorizontalScrollBarPolicy(Qt::ScrollBarAsNeeded);
        abortConditionsList->setProperty("showDropIndicator", QVariant(false));

        horizontalLayout_3->addWidget(abortConditionsList);

        horizontalSpacer = new QSpacerItem(10, 10, QSizePolicy::MinimumExpanding, QSizePolicy::Minimum);

        horizontalLayout_3->addItem(horizontalSpacer);


        verticalLayout->addWidget(acListMaximizeFrame);

        label_3 = new QLabel(SpSetPlay);
        label_3->setObjectName(QString::fromUtf8("label_3"));
        sizePolicy.setHeightForWidth(label_3->sizePolicy().hasHeightForWidth());
        label_3->setSizePolicy(sizePolicy);
        label_3->setMinimumSize(QSize(300, 25));
        label_3->setMaximumSize(QSize(300, 25));
        QPalette palette3;
        palette3.setBrush(QPalette::Active, QPalette::WindowText, brush);
        palette3.setBrush(QPalette::Active, QPalette::Button, brush1);
        palette3.setBrush(QPalette::Active, QPalette::Light, brush2);
        palette3.setBrush(QPalette::Active, QPalette::Text, brush);
        palette3.setBrush(QPalette::Active, QPalette::BrightText, brush3);
        palette3.setBrush(QPalette::Active, QPalette::ButtonText, brush);
        palette3.setBrush(QPalette::Active, QPalette::Base, brush1);
        palette3.setBrush(QPalette::Active, QPalette::Window, brush1);
        palette3.setBrush(QPalette::Inactive, QPalette::WindowText, brush);
        palette3.setBrush(QPalette::Inactive, QPalette::Button, brush1);
        palette3.setBrush(QPalette::Inactive, QPalette::Light, brush);
        palette3.setBrush(QPalette::Inactive, QPalette::Text, brush);
        palette3.setBrush(QPalette::Inactive, QPalette::BrightText, brush3);
        palette3.setBrush(QPalette::Inactive, QPalette::ButtonText, brush);
        palette3.setBrush(QPalette::Inactive, QPalette::Base, brush1);
        palette3.setBrush(QPalette::Inactive, QPalette::Window, brush1);
        palette3.setBrush(QPalette::Disabled, QPalette::WindowText, brush);
        palette3.setBrush(QPalette::Disabled, QPalette::Button, brush1);
        palette3.setBrush(QPalette::Disabled, QPalette::Light, brush);
        palette3.setBrush(QPalette::Disabled, QPalette::Text, brush);
        palette3.setBrush(QPalette::Disabled, QPalette::BrightText, brush3);
        palette3.setBrush(QPalette::Disabled, QPalette::ButtonText, brush);
        palette3.setBrush(QPalette::Disabled, QPalette::Base, brush1);
        palette3.setBrush(QPalette::Disabled, QPalette::Window, brush1);
        label_3->setPalette(palette3);
        label_3->setStyleSheet(QString::fromUtf8("QLabel { background-color : rgb(38, 38, 38); color : white; }"));
        label_3->setAlignment(Qt::AlignCenter);
        label_3->setIndent(0);

        verticalLayout->addWidget(label_3);

        frameGraph = new QFrame(SpSetPlay);
        frameGraph->setObjectName(QString::fromUtf8("frameGraph"));
        sizePolicy2.setHeightForWidth(frameGraph->sizePolicy().hasHeightForWidth());
        frameGraph->setSizePolicy(sizePolicy2);
        frameGraph->setMinimumSize(QSize(300, 120));
        frameGraph->setMaximumSize(QSize(300, 16777215));
        frameGraph->setFrameShape(QFrame::Box);
        frameGraph->setFrameShadow(QFrame::Plain);
        frameGraph->setLineWidth(4);
        verticalLayout_3 = new QVBoxLayout(frameGraph);
        verticalLayout_3->setSpacing(0);
        verticalLayout_3->setContentsMargins(0, 0, 0, 0);
        verticalLayout_3->setObjectName(QString::fromUtf8("verticalLayout_3"));
        graph = new SpGraph(frameGraph);
        graph->setObjectName(QString::fromUtf8("graph"));
        sizePolicy2.setHeightForWidth(graph->sizePolicy().hasHeightForWidth());
        graph->setSizePolicy(sizePolicy2);
        graph->setMinimumSize(QSize(0, 112));
        graph->setMaximumSize(QSize(300, 16777215));
        graph->setFrameShape(QFrame::NoFrame);
        graph->setFrameShadow(QFrame::Plain);
        graph->setLineWidth(4);
        graph->setVerticalScrollBarPolicy(Qt::ScrollBarAlwaysOff);
        graph->setHorizontalScrollBarPolicy(Qt::ScrollBarAlwaysOff);

        verticalLayout_3->addWidget(graph);


        verticalLayout->addWidget(frameGraph);

        stepDetailsLabel = new QLabel(SpSetPlay);
        stepDetailsLabel->setObjectName(QString::fromUtf8("stepDetailsLabel"));
        sizePolicy.setHeightForWidth(stepDetailsLabel->sizePolicy().hasHeightForWidth());
        stepDetailsLabel->setSizePolicy(sizePolicy);
        stepDetailsLabel->setMinimumSize(QSize(300, 25));
        stepDetailsLabel->setMaximumSize(QSize(300, 25));
        QPalette palette4;
        palette4.setBrush(QPalette::Active, QPalette::WindowText, brush);
        palette4.setBrush(QPalette::Active, QPalette::Button, brush1);
        palette4.setBrush(QPalette::Active, QPalette::Light, brush2);
        palette4.setBrush(QPalette::Active, QPalette::Text, brush);
        palette4.setBrush(QPalette::Active, QPalette::BrightText, brush3);
        palette4.setBrush(QPalette::Active, QPalette::ButtonText, brush);
        palette4.setBrush(QPalette::Active, QPalette::Base, brush1);
        palette4.setBrush(QPalette::Active, QPalette::Window, brush1);
        palette4.setBrush(QPalette::Inactive, QPalette::WindowText, brush);
        palette4.setBrush(QPalette::Inactive, QPalette::Button, brush1);
        palette4.setBrush(QPalette::Inactive, QPalette::Light, brush);
        palette4.setBrush(QPalette::Inactive, QPalette::Text, brush);
        palette4.setBrush(QPalette::Inactive, QPalette::BrightText, brush3);
        palette4.setBrush(QPalette::Inactive, QPalette::ButtonText, brush);
        palette4.setBrush(QPalette::Inactive, QPalette::Base, brush1);
        palette4.setBrush(QPalette::Inactive, QPalette::Window, brush1);
        palette4.setBrush(QPalette::Disabled, QPalette::WindowText, brush);
        palette4.setBrush(QPalette::Disabled, QPalette::Button, brush1);
        palette4.setBrush(QPalette::Disabled, QPalette::Light, brush);
        palette4.setBrush(QPalette::Disabled, QPalette::Text, brush);
        palette4.setBrush(QPalette::Disabled, QPalette::BrightText, brush3);
        palette4.setBrush(QPalette::Disabled, QPalette::ButtonText, brush);
        palette4.setBrush(QPalette::Disabled, QPalette::Base, brush1);
        palette4.setBrush(QPalette::Disabled, QPalette::Window, brush1);
        stepDetailsLabel->setPalette(palette4);
        stepDetailsLabel->setStyleSheet(QString::fromUtf8("QLabel { background-color : rgb(38, 38, 38); color : white; }"));
        stepDetailsLabel->setAlignment(Qt::AlignCenter);
        stepDetailsLabel->setIndent(0);

        verticalLayout->addWidget(stepDetailsLabel);

        stepInformation = new QFrame(SpSetPlay);
        stepInformation->setObjectName(QString::fromUtf8("stepInformation"));
        stepInformation->setMinimumSize(QSize(300, 47));
        stepInformation->setMaximumSize(QSize(300, 47));
        stepInformation->setFrameShape(QFrame::Box);
        stepInformation->setFrameShadow(QFrame::Plain);
        stepInformation->setLineWidth(4);
        horizontalLayout_2 = new QHBoxLayout(stepInformation);
        horizontalLayout_2->setContentsMargins(0, 0, 0, 0);
        horizontalLayout_2->setObjectName(QString::fromUtf8("horizontalLayout_2"));
        label_2 = new QLabel(stepInformation);
        label_2->setObjectName(QString::fromUtf8("label_2"));
        QSizePolicy sizePolicy7(QSizePolicy::Preferred, QSizePolicy::Preferred);
        sizePolicy7.setHorizontalStretch(0);
        sizePolicy7.setVerticalStretch(0);
        sizePolicy7.setHeightForWidth(label_2->sizePolicy().hasHeightForWidth());
        label_2->setSizePolicy(sizePolicy7);
        QFont font1;
        font1.setPointSize(9);
        label_2->setFont(font1);
        label_2->setAlignment(Qt::AlignLeading|Qt::AlignLeft|Qt::AlignVCenter);
        label_2->setMargin(0);
        label_2->setIndent(6);

        horizontalLayout_2->addWidget(label_2);

        waitTime = new QSpinBox(stepInformation);
        waitTime->setObjectName(QString::fromUtf8("waitTime"));
        waitTime->setEnabled(true);
        QSizePolicy sizePolicy8(QSizePolicy::Minimum, QSizePolicy::Fixed);
        sizePolicy8.setHorizontalStretch(0);
        sizePolicy8.setVerticalStretch(0);
        sizePolicy8.setHeightForWidth(waitTime->sizePolicy().hasHeightForWidth());
        waitTime->setSizePolicy(sizePolicy8);
        waitTime->setMaximum(1000);

        horizontalLayout_2->addWidget(waitTime);

        abortTimeCB = new QCheckBox(stepInformation);
        abortTimeCB->setObjectName(QString::fromUtf8("abortTimeCB"));
        abortTimeCB->setFont(font1);

        horizontalLayout_2->addWidget(abortTimeCB);

        abortTime = new QSpinBox(stepInformation);
        abortTime->setObjectName(QString::fromUtf8("abortTime"));
        abortTime->setEnabled(false);
        abortTime->setMaximum(1000);

        horizontalLayout_2->addWidget(abortTime);


        verticalLayout->addWidget(stepInformation);


        horizontalLayout_6->addLayout(verticalLayout);

        verticalLayout_4 = new QVBoxLayout();
        verticalLayout_4->setSpacing(0);
        verticalLayout_4->setObjectName(QString::fromUtf8("verticalLayout_4"));
        logToolBar = new QWidget(SpSetPlay);
        logToolBar->setObjectName(QString::fromUtf8("logToolBar"));
        QSizePolicy sizePolicy9(QSizePolicy::MinimumExpanding, QSizePolicy::Minimum);
        sizePolicy9.setHorizontalStretch(0);
        sizePolicy9.setVerticalStretch(0);
        sizePolicy9.setHeightForWidth(logToolBar->sizePolicy().hasHeightForWidth());
        logToolBar->setSizePolicy(sizePolicy9);
        logToolBar->setMinimumSize(QSize(0, 25));
        logToolBar->setMaximumSize(QSize(16777215, 30));
        horizontalLayout = new QHBoxLayout(logToolBar);
        horizontalLayout->setContentsMargins(0, 0, 0, 0);
        horizontalLayout->setObjectName(QString::fromUtf8("horizontalLayout"));

        verticalLayout_4->addWidget(logToolBar);

        frameField = new QFrame(SpSetPlay);
        frameField->setObjectName(QString::fromUtf8("frameField"));
        QSizePolicy sizePolicy10(QSizePolicy::MinimumExpanding, QSizePolicy::MinimumExpanding);
        sizePolicy10.setHorizontalStretch(0);
        sizePolicy10.setVerticalStretch(0);
        sizePolicy10.setHeightForWidth(frameField->sizePolicy().hasHeightForWidth());
        frameField->setSizePolicy(sizePolicy10);
        frameField->setFrameShape(QFrame::NoFrame);
        frameField->setFrameShadow(QFrame::Plain);
        frameField->setLineWidth(0);
        verticalLayout_7 = new QVBoxLayout(frameField);
        verticalLayout_7->setSpacing(0);
        verticalLayout_7->setContentsMargins(0, 0, 0, 0);
        verticalLayout_7->setObjectName(QString::fromUtf8("verticalLayout_7"));
        field = new SpField(frameField);
        field->setObjectName(QString::fromUtf8("field"));
        sizePolicy10.setHeightForWidth(field->sizePolicy().hasHeightForWidth());
        field->setSizePolicy(sizePolicy10);
        field->setFrameShape(QFrame::NoFrame);
        field->setFrameShadow(QFrame::Plain);
        field->setLineWidth(0);
        field->setVerticalScrollBarPolicy(Qt::ScrollBarAlwaysOff);
        field->setHorizontalScrollBarPolicy(Qt::ScrollBarAlwaysOff);

        verticalLayout_7->addWidget(field);

        showPlayerInfoButton = new QPushButton(frameField);
        showPlayerInfoButton->setObjectName(QString::fromUtf8("showPlayerInfoButton"));
        sizePolicy5.setHeightForWidth(showPlayerInfoButton->sizePolicy().hasHeightForWidth());
        showPlayerInfoButton->setSizePolicy(sizePolicy5);
        showPlayerInfoButton->setMaximumSize(QSize(16777215, 15));
        showPlayerInfoButton->setFont(font1);
        showPlayerInfoButton->setIconSize(QSize(0, 0));
        showPlayerInfoButton->setDefault(false);
        showPlayerInfoButton->setFlat(false);

        verticalLayout_7->addWidget(showPlayerInfoButton);

        playerInfoFrame = new QFrame(frameField);
        playerInfoFrame->setObjectName(QString::fromUtf8("playerInfoFrame"));
        QSizePolicy sizePolicy11(QSizePolicy::MinimumExpanding, QSizePolicy::Maximum);
        sizePolicy11.setHorizontalStretch(0);
        sizePolicy11.setVerticalStretch(0);
        sizePolicy11.setHeightForWidth(playerInfoFrame->sizePolicy().hasHeightForWidth());
        playerInfoFrame->setSizePolicy(sizePolicy11);
        playerInfoFrame->setMinimumSize(QSize(0, 0));
        playerInfoFrame->setFrameShape(QFrame::Box);
        playerInfoFrame->setFrameShadow(QFrame::Plain);
        playerInfoFrame->setLineWidth(4);
        horizontalLayout_7 = new QHBoxLayout(playerInfoFrame);
        horizontalLayout_7->setSpacing(10);
        horizontalLayout_7->setContentsMargins(0, 0, 0, 0);
        horizontalLayout_7->setObjectName(QString::fromUtf8("horizontalLayout_7"));
        frame = new QFrame(playerInfoFrame);
        frame->setObjectName(QString::fromUtf8("frame"));
        sizePolicy2.setHeightForWidth(frame->sizePolicy().hasHeightForWidth());
        frame->setSizePolicy(sizePolicy2);
        frame->setMaximumSize(QSize(100, 16777215));
        frame->setStyleSheet(QString::fromUtf8(" background-color : rgb(38, 38, 38);"));
        frame->setFrameShape(QFrame::NoFrame);
        frame->setFrameShadow(QFrame::Raised);
        frame->setLineWidth(0);
        gridLayout_2 = new QGridLayout(frame);
        gridLayout_2->setSpacing(0);
        gridLayout_2->setContentsMargins(0, 0, 0, 0);
        gridLayout_2->setObjectName(QString::fromUtf8("gridLayout_2"));
        playerInfoIdentificationNumber = new QLabel(frame);
        playerInfoIdentificationNumber->setObjectName(QString::fromUtf8("playerInfoIdentificationNumber"));
        sizePolicy6.setHeightForWidth(playerInfoIdentificationNumber->sizePolicy().hasHeightForWidth());
        playerInfoIdentificationNumber->setSizePolicy(sizePolicy6);
        playerInfoIdentificationNumber->setMinimumSize(QSize(50, 50));
        playerInfoIdentificationNumber->setMaximumSize(QSize(50, 50));
        QPalette palette5;
        palette5.setBrush(QPalette::Active, QPalette::WindowText, brush);
        palette5.setBrush(QPalette::Active, QPalette::Button, brush1);
        palette5.setBrush(QPalette::Active, QPalette::Light, brush2);
        palette5.setBrush(QPalette::Active, QPalette::Text, brush);
        palette5.setBrush(QPalette::Active, QPalette::BrightText, brush3);
        palette5.setBrush(QPalette::Active, QPalette::ButtonText, brush);
        palette5.setBrush(QPalette::Active, QPalette::Base, brush1);
        palette5.setBrush(QPalette::Active, QPalette::Window, brush1);
        palette5.setBrush(QPalette::Inactive, QPalette::WindowText, brush);
        palette5.setBrush(QPalette::Inactive, QPalette::Button, brush1);
        palette5.setBrush(QPalette::Inactive, QPalette::Light, brush);
        palette5.setBrush(QPalette::Inactive, QPalette::Text, brush);
        palette5.setBrush(QPalette::Inactive, QPalette::BrightText, brush3);
        palette5.setBrush(QPalette::Inactive, QPalette::ButtonText, brush);
        palette5.setBrush(QPalette::Inactive, QPalette::Base, brush1);
        palette5.setBrush(QPalette::Inactive, QPalette::Window, brush1);
        palette5.setBrush(QPalette::Disabled, QPalette::WindowText, brush);
        palette5.setBrush(QPalette::Disabled, QPalette::Button, brush1);
        palette5.setBrush(QPalette::Disabled, QPalette::Light, brush);
        palette5.setBrush(QPalette::Disabled, QPalette::Text, brush);
        palette5.setBrush(QPalette::Disabled, QPalette::BrightText, brush3);
        palette5.setBrush(QPalette::Disabled, QPalette::ButtonText, brush);
        palette5.setBrush(QPalette::Disabled, QPalette::Base, brush1);
        palette5.setBrush(QPalette::Disabled, QPalette::Window, brush1);
        playerInfoIdentificationNumber->setPalette(palette5);
        QFont font2;
        font2.setPointSize(14);
        font2.setBold(true);
        font2.setWeight(75);
        playerInfoIdentificationNumber->setFont(font2);
        playerInfoIdentificationNumber->setAutoFillBackground(false);
        playerInfoIdentificationNumber->setStyleSheet(QString::fromUtf8(" QLabel{image: url(:/new/images/setPlayGUI/images/tshirt.png);   }"));
        playerInfoIdentificationNumber->setFrameShape(QFrame::NoFrame);
        playerInfoIdentificationNumber->setAlignment(Qt::AlignCenter);
        playerInfoIdentificationNumber->setWordWrap(true);
        playerInfoIdentificationNumber->setIndent(0);

        gridLayout_2->addWidget(playerInfoIdentificationNumber, 0, 2, 1, 1);

        playerInfoIdentificationName = new QLabel(frame);
        playerInfoIdentificationName->setObjectName(QString::fromUtf8("playerInfoIdentificationName"));
        sizePolicy3.setHeightForWidth(playerInfoIdentificationName->sizePolicy().hasHeightForWidth());
        playerInfoIdentificationName->setSizePolicy(sizePolicy3);
        playerInfoIdentificationName->setMinimumSize(QSize(100, 0));
        playerInfoIdentificationName->setMaximumSize(QSize(16777215, 20));
        QPalette palette6;
        palette6.setBrush(QPalette::Active, QPalette::WindowText, brush);
        palette6.setBrush(QPalette::Active, QPalette::Button, brush1);
        palette6.setBrush(QPalette::Active, QPalette::Light, brush2);
        palette6.setBrush(QPalette::Active, QPalette::Text, brush);
        palette6.setBrush(QPalette::Active, QPalette::BrightText, brush3);
        palette6.setBrush(QPalette::Active, QPalette::ButtonText, brush);
        palette6.setBrush(QPalette::Active, QPalette::Base, brush1);
        palette6.setBrush(QPalette::Active, QPalette::Window, brush1);
        palette6.setBrush(QPalette::Inactive, QPalette::WindowText, brush);
        palette6.setBrush(QPalette::Inactive, QPalette::Button, brush1);
        palette6.setBrush(QPalette::Inactive, QPalette::Light, brush);
        palette6.setBrush(QPalette::Inactive, QPalette::Text, brush);
        palette6.setBrush(QPalette::Inactive, QPalette::BrightText, brush3);
        palette6.setBrush(QPalette::Inactive, QPalette::ButtonText, brush);
        palette6.setBrush(QPalette::Inactive, QPalette::Base, brush1);
        palette6.setBrush(QPalette::Inactive, QPalette::Window, brush1);
        palette6.setBrush(QPalette::Disabled, QPalette::WindowText, brush);
        palette6.setBrush(QPalette::Disabled, QPalette::Button, brush1);
        palette6.setBrush(QPalette::Disabled, QPalette::Light, brush);
        palette6.setBrush(QPalette::Disabled, QPalette::Text, brush);
        palette6.setBrush(QPalette::Disabled, QPalette::BrightText, brush3);
        palette6.setBrush(QPalette::Disabled, QPalette::ButtonText, brush);
        palette6.setBrush(QPalette::Disabled, QPalette::Base, brush1);
        palette6.setBrush(QPalette::Disabled, QPalette::Window, brush1);
        playerInfoIdentificationName->setPalette(palette6);
        playerInfoIdentificationName->setAutoFillBackground(false);
        playerInfoIdentificationName->setStyleSheet(QString::fromUtf8(""));
        playerInfoIdentificationName->setFrameShape(QFrame::NoFrame);
        playerInfoIdentificationName->setLineWidth(0);
        playerInfoIdentificationName->setAlignment(Qt::AlignCenter);
        playerInfoIdentificationName->setWordWrap(true);
        playerInfoIdentificationName->setIndent(0);

        gridLayout_2->addWidget(playerInfoIdentificationName, 1, 1, 1, 3);

        horizontalSpacer_2 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        gridLayout_2->addItem(horizontalSpacer_2, 0, 1, 1, 1);

        horizontalSpacer_3 = new QSpacerItem(40, 20, QSizePolicy::Maximum, QSizePolicy::Minimum);

        gridLayout_2->addItem(horizontalSpacer_3, 0, 3, 1, 1);


        horizontalLayout_7->addWidget(frame);

        playerInfoPositionLabel = new QLabel(playerInfoFrame);
        playerInfoPositionLabel->setObjectName(QString::fromUtf8("playerInfoPositionLabel"));
        sizePolicy9.setHeightForWidth(playerInfoPositionLabel->sizePolicy().hasHeightForWidth());
        playerInfoPositionLabel->setSizePolicy(sizePolicy9);
        playerInfoPositionLabel->setFont(font);
        playerInfoPositionLabel->setAlignment(Qt::AlignCenter);
        playerInfoPositionLabel->setWordWrap(true);

        horizontalLayout_7->addWidget(playerInfoPositionLabel);

        playerInfoActionLabel = new QLabel(playerInfoFrame);
        playerInfoActionLabel->setObjectName(QString::fromUtf8("playerInfoActionLabel"));
        sizePolicy9.setHeightForWidth(playerInfoActionLabel->sizePolicy().hasHeightForWidth());
        playerInfoActionLabel->setSizePolicy(sizePolicy9);
        playerInfoActionLabel->setMinimumSize(QSize(90, 0));
        playerInfoActionLabel->setMaximumSize(QSize(16777215, 16777215));
        playerInfoActionLabel->setFont(font);
        playerInfoActionLabel->setAlignment(Qt::AlignCenter);
        playerInfoActionLabel->setWordWrap(true);

        horizontalLayout_7->addWidget(playerInfoActionLabel);

        verticalLayout_2 = new QVBoxLayout();
        verticalLayout_2->setSpacing(0);
        verticalLayout_2->setObjectName(QString::fromUtf8("verticalLayout_2"));
        verticalLayout_2->setSizeConstraint(QLayout::SetDefaultConstraint);
        verticalSpacer = new QSpacerItem(20, 25, QSizePolicy::Minimum, QSizePolicy::MinimumExpanding);

        verticalLayout_2->addItem(verticalSpacer);

        editPlayerButton = new QToolButton(playerInfoFrame);
        editPlayerButton->setObjectName(QString::fromUtf8("editPlayerButton"));
        editPlayerButton->setEnabled(false);
        sizePolicy4.setHeightForWidth(editPlayerButton->sizePolicy().hasHeightForWidth());
        editPlayerButton->setSizePolicy(sizePolicy4);
        editPlayerButton->setMinimumSize(QSize(40, 40));
        QIcon icon;
        icon.addFile(QString::fromUtf8(":/new/images/setPlayGUI/images/configuration_edit.png"), QSize(), QIcon::Normal, QIcon::Off);
        editPlayerButton->setIcon(icon);
        editPlayerButton->setIconSize(QSize(40, 40));
        editPlayerButton->setAutoRaise(true);

        verticalLayout_2->addWidget(editPlayerButton);


        horizontalLayout_7->addLayout(verticalLayout_2);


        verticalLayout_7->addWidget(playerInfoFrame);


        verticalLayout_4->addWidget(frameField);


        horizontalLayout_6->addLayout(verticalLayout_4);

        QWidget::setTabOrder(name, id);
        QWidget::setTabOrder(id, invertible);
        QWidget::setTabOrder(invertible, comment);
        QWidget::setTabOrder(comment, graph);
        QWidget::setTabOrder(graph, waitTime);
        QWidget::setTabOrder(waitTime, abortTimeCB);
        QWidget::setTabOrder(abortTimeCB, abortTime);
        QWidget::setTabOrder(abortTime, field);

        retranslateUi(SpSetPlay);

        QMetaObject::connectSlotsByName(SpSetPlay);
    } // setupUi

    void retranslateUi(QWidget *SpSetPlay)
    {
        SpSetPlay->setWindowTitle(QApplication::translate("SpSetPlay", "Form", 0, QApplication::UnicodeUTF8));
#ifndef QT_NO_TOOLTIP
        SpSetPlay->setToolTip(QString());
#endif // QT_NO_TOOLTIP
#ifndef QT_NO_WHATSTHIS
        SpSetPlay->setWhatsThis(QString());
#endif // QT_NO_WHATSTHIS
        label_5->setText(QApplication::translate("SpSetPlay", "  SetPlay Identification", 0, QApplication::UnicodeUTF8));
        comment->setDocumentTitle(QString());
        idLabel->setText(QApplication::translate("SpSetPlay", "Id:", 0, QApplication::UnicodeUTF8));
        id->setText(QApplication::translate("SpSetPlay", "333", 0, QApplication::UnicodeUTF8));
        invertible->setText(QApplication::translate("SpSetPlay", "Invertible", 0, QApplication::UnicodeUTF8));
        commentLabel->setText(QApplication::translate("SpSetPlay", "Comment:", 0, QApplication::UnicodeUTF8));
        nameLabel->setText(QApplication::translate("SpSetPlay", "Name:", 0, QApplication::UnicodeUTF8));
        label_4->setText(QApplication::translate("SpSetPlay", "  SetPlay Abort Conditions", 0, QApplication::UnicodeUTF8));

        const bool __sortingEnabled = abortConditionsList->isSortingEnabled();
        abortConditionsList->setSortingEnabled(false);
        QListWidgetItem *___qlistwidgetitem = abortConditionsList->item(0);
        ___qlistwidgetitem->setText(QApplication::translate("SpSetPlay", "rrr", 0, QApplication::UnicodeUTF8));
        QListWidgetItem *___qlistwidgetitem1 = abortConditionsList->item(1);
        ___qlistwidgetitem1->setText(QApplication::translate("SpSetPlay", "adsasd", 0, QApplication::UnicodeUTF8));
        abortConditionsList->setSortingEnabled(__sortingEnabled);

        label_3->setText(QApplication::translate("SpSetPlay", "  SetPlay Graph", 0, QApplication::UnicodeUTF8));
        stepDetailsLabel->setText(QApplication::translate("SpSetPlay", "  Step  - Time Configuration", 0, QApplication::UnicodeUTF8));
        label_2->setText(QApplication::translate("SpSetPlay", "Wait time", 0, QApplication::UnicodeUTF8));
#ifndef QT_NO_TOOLTIP
        abortTimeCB->setToolTip(QApplication::translate("SpSetPlay", "Check box to edit.  Uncheck to automatic calc ", 0, QApplication::UnicodeUTF8));
#endif // QT_NO_TOOLTIP
        abortTimeCB->setText(QApplication::translate("SpSetPlay", "Abort time", 0, QApplication::UnicodeUTF8));
#ifndef QT_NO_TOOLTIP
        showPlayerInfoButton->setToolTip(QApplication::translate("SpSetPlay", "Show Player Information", 0, QApplication::UnicodeUTF8));
#endif // QT_NO_TOOLTIP
        showPlayerInfoButton->setText(QApplication::translate("SpSetPlay", "\316\233", 0, QApplication::UnicodeUTF8));
        playerInfoIdentificationNumber->setText(QApplication::translate("SpSetPlay", "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0//EN\" \"http://www.w3.org/TR/REC-html40/strict.dtd\">\n"
"<html><head><meta name=\"qrichtext\" content=\"1\" /><style type=\"text/css\">\n"
"p, li { white-space: pre-wrap; }\n"
"</style></head><body style=\" font-family:'Ubuntu'; font-size:14pt; font-weight:400; font-style:normal;\">\n"
"<table border=\"0\" style=\"-qt-table-type: root; margin-top:4px; margin-bottom:4px; margin-left:4px; margin-right:4px;\">\n"
"<tr>\n"
"<td style=\"border: none;\">\n"
"<p align=\"center\" style=\" margin-top:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; -qt-block-indent:0; text-indent:0px;\"><span style=\" font-size:16pt; color:#000000;\">?</span></p></td></tr></table></body></html>", 0, QApplication::UnicodeUTF8));
        playerInfoIdentificationName->setText(QApplication::translate("SpSetPlay", "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0//EN\" \"http://www.w3.org/TR/REC-html40/strict.dtd\">\n"
"<html><head><meta name=\"qrichtext\" content=\"1\" /><style type=\"text/css\">\n"
"p, li { white-space: pre-wrap; }\n"
"</style></head><body style=\" font-family:'Ubuntu'; font-size:11pt; font-weight:400; font-style:normal;\">\n"
"<table border=\"0\" style=\"-qt-table-type: root; margin-top:4px; margin-bottom:4px; margin-left:4px; margin-right:4px;\">\n"
"<tr>\n"
"<td style=\"border: none;\">\n"
"<p align=\"center\" style=\" margin-top:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; -qt-block-indent:0; text-indent:0px;\">...</p></td></tr></table></body></html>", 0, QApplication::UnicodeUTF8));
        playerInfoPositionLabel->setText(QApplication::translate("SpSetPlay", "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0//EN\" \"http://www.w3.org/TR/REC-html40/strict.dtd\">\n"
"<html><head><meta name=\"qrichtext\" content=\"1\" /><style type=\"text/css\">\n"
"p, li { white-space: pre-wrap; }\n"
"</style></head><body style=\" font-family:'Ubuntu'; font-size:11pt; font-weight:400; font-style:normal;\">\n"
"<table border=\"0\" style=\"-qt-table-type: root; margin-top:4px; margin-bottom:4px; margin-left:4px; margin-right:4px;\">\n"
"<tr>\n"
"<td style=\"border: none;\">\n"
"<p align=\"center\" style=\" margin-top:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; -qt-block-indent:0; text-indent:0px;\">...</p></td></tr></table></body></html>", 0, QApplication::UnicodeUTF8));
        playerInfoActionLabel->setText(QApplication::translate("SpSetPlay", "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0//EN\" \"http://www.w3.org/TR/REC-html40/strict.dtd\">\n"
"<html><head><meta name=\"qrichtext\" content=\"1\" /><style type=\"text/css\">\n"
"p, li { white-space: pre-wrap; }\n"
"</style></head><body style=\" font-family:'Ubuntu'; font-size:11pt; font-weight:400; font-style:normal;\">\n"
"<table border=\"0\" style=\"-qt-table-type: root; margin-top:4px; margin-bottom:4px; margin-left:4px; margin-right:4px;\">\n"
"<tr>\n"
"<td style=\"border: none;\">\n"
"<p align=\"center\" style=\" margin-top:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; -qt-block-indent:0; text-indent:0px;\">...</p></td></tr></table></body></html>", 0, QApplication::UnicodeUTF8));
#ifndef QT_NO_TOOLTIP
        editPlayerButton->setToolTip(QApplication::translate("SpSetPlay", "Edit player", 0, QApplication::UnicodeUTF8));
#endif // QT_NO_TOOLTIP
        editPlayerButton->setText(QApplication::translate("SpSetPlay", "...", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class SpSetPlay: public Ui_SpSetPlay {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_SPSETPLAY_H
