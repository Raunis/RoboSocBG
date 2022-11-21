/********************************************************************************
** Form generated from reading UI file 'spplayereditordialog.ui'
**
** Created by: Qt User Interface Compiler version 4.8.7
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_SPPLAYEREDITORDIALOG_H
#define UI_SPPLAYEREDITORDIALOG_H

#include <QtCore/QVariant>
#include <QtGui/QAction>
#include <QtGui/QApplication>
#include <QtGui/QButtonGroup>
#include <QtGui/QCheckBox>
#include <QtGui/QComboBox>
#include <QtGui/QDialog>
#include <QtGui/QDoubleSpinBox>
#include <QtGui/QFrame>
#include <QtGui/QGridLayout>
#include <QtGui/QHBoxLayout>
#include <QtGui/QHeaderView>
#include <QtGui/QLabel>
#include <QtGui/QLineEdit>
#include <QtGui/QPushButton>
#include <QtGui/QRadioButton>
#include <QtGui/QSpacerItem>
#include <QtGui/QTabWidget>
#include <QtGui/QWidget>

QT_BEGIN_NAMESPACE

class Ui_SpPlayerEditorDialog
{
public:
    QGridLayout *gridLayout_4;
    QTabWidget *playerEditorTabs;
    QWidget *identificationTab;
    QGridLayout *gridLayout;
    QRadioButton *rbByNumber;
    QRadioButton *rbByName;
    QLabel *labelPlayerNumber;
    QLineEdit *textEditPlayerName;
    QLabel *label_2;
    QSpacerItem *verticalSpacer_4;
    QLabel *label_8;
    QWidget *stepPositionTab;
    QGridLayout *gridLayout_2;
    QSpacerItem *verticalSpacer_5;
    QSpacerItem *verticalSpacer;
    QRadioButton *rbPositionAbsolute;
    QFrame *frame1;
    QHBoxLayout *horizontalLayout_2;
    QSpacerItem *horizontalSpacer_3;
    QDoubleSpinBox *positionX;
    QLabel *label;
    QDoubleSpinBox *positionY;
    QLabel *label_9;
    QSpacerItem *horizontalSpacer_2;
    QCheckBox *cbDummyPosition;
    QRadioButton *rbPositionRelativeToPlayer;
    QRadioButton *rbPositionRelativeToBall;
    QLabel *label_4;
    QComboBox *comboSelectRelativePlayerPosition;
    QCheckBox *nearOffsideLineCond;
    QLabel *label_6;
    QLabel *stepPositionTitle;
    QCheckBox *onPositionCond;
    QCheckBox *ballOwnerCond;
    QWidget *transitionActionTab;
    QGridLayout *gridLayout_3;
    QLabel *transitionTitle;
    QLabel *actionLabel;
    QLabel *actionImage;
    QSpacerItem *verticalSpacer_7;
    QLabel *label_5;
    QLabel *label_14;
    QCheckBox *cbActionCondition;
    QSpacerItem *verticalSpacer_2;
    QFrame *actionPositionFrame;
    QGridLayout *gridLayout_5;
    QRadioButton *rbActionAbsolute;
    QRadioButton *rbActionRelativeToBall;
    QRadioButton *rbActionRelativeToPlayer;
    QFrame *frame;
    QHBoxLayout *horizontalLayout_3;
    QSpacerItem *horizontalSpacer_4;
    QDoubleSpinBox *actionX;
    QLabel *label_7;
    QDoubleSpinBox *actionY;
    QLabel *label_11;
    QSpacerItem *horizontalSpacer_5;
    QSpacerItem *horizontalSpacer;
    QComboBox *comboSelectActionRelativePlayer;
    QFrame *frame_1;
    QHBoxLayout *horizontalLayout_4;
    QPushButton *cancelButton;
    QPushButton *saveButton;
    QPushButton *resetButton;
    QButtonGroup *buttonGroup_2;
    QButtonGroup *buttonGroup;

    void setupUi(QDialog *SpPlayerEditorDialog)
    {
        if (SpPlayerEditorDialog->objectName().isEmpty())
            SpPlayerEditorDialog->setObjectName(QString::fromUtf8("SpPlayerEditorDialog"));
        SpPlayerEditorDialog->setWindowModality(Qt::ApplicationModal);
        SpPlayerEditorDialog->resize(565, 554);
        QSizePolicy sizePolicy(QSizePolicy::MinimumExpanding, QSizePolicy::Maximum);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(SpPlayerEditorDialog->sizePolicy().hasHeightForWidth());
        SpPlayerEditorDialog->setSizePolicy(sizePolicy);
        SpPlayerEditorDialog->setMinimumSize(QSize(565, 554));
        SpPlayerEditorDialog->setMaximumSize(QSize(565, 554));
        SpPlayerEditorDialog->setModal(false);
        gridLayout_4 = new QGridLayout(SpPlayerEditorDialog);
        gridLayout_4->setObjectName(QString::fromUtf8("gridLayout_4"));
        gridLayout_4->setSizeConstraint(QLayout::SetFixedSize);
        playerEditorTabs = new QTabWidget(SpPlayerEditorDialog);
        playerEditorTabs->setObjectName(QString::fromUtf8("playerEditorTabs"));
        playerEditorTabs->setEnabled(true);
        QSizePolicy sizePolicy1(QSizePolicy::Minimum, QSizePolicy::MinimumExpanding);
        sizePolicy1.setHorizontalStretch(0);
        sizePolicy1.setVerticalStretch(0);
        sizePolicy1.setHeightForWidth(playerEditorTabs->sizePolicy().hasHeightForWidth());
        playerEditorTabs->setSizePolicy(sizePolicy1);
        playerEditorTabs->setMinimumSize(QSize(547, 0));
        playerEditorTabs->setMaximumSize(QSize(547, 16777215));
        QFont font;
        font.setKerning(true);
        playerEditorTabs->setFont(font);
        playerEditorTabs->setTabPosition(QTabWidget::North);
        playerEditorTabs->setTabShape(QTabWidget::Rounded);
        playerEditorTabs->setElideMode(Qt::ElideLeft);
        playerEditorTabs->setUsesScrollButtons(true);
        playerEditorTabs->setDocumentMode(false);
        playerEditorTabs->setTabsClosable(false);
        playerEditorTabs->setMovable(false);
        identificationTab = new QWidget();
        identificationTab->setObjectName(QString::fromUtf8("identificationTab"));
        gridLayout = new QGridLayout(identificationTab);
        gridLayout->setObjectName(QString::fromUtf8("gridLayout"));
        rbByNumber = new QRadioButton(identificationTab);
        buttonGroup = new QButtonGroup(SpPlayerEditorDialog);
        buttonGroup->setObjectName(QString::fromUtf8("buttonGroup"));
        buttonGroup->addButton(rbByNumber);
        rbByNumber->setObjectName(QString::fromUtf8("rbByNumber"));

        gridLayout->addWidget(rbByNumber, 1, 0, 1, 1);

        rbByName = new QRadioButton(identificationTab);
        buttonGroup->addButton(rbByName);
        rbByName->setObjectName(QString::fromUtf8("rbByName"));

        gridLayout->addWidget(rbByName, 2, 0, 1, 1);

        labelPlayerNumber = new QLabel(identificationTab);
        labelPlayerNumber->setObjectName(QString::fromUtf8("labelPlayerNumber"));
        labelPlayerNumber->setEnabled(true);
        QSizePolicy sizePolicy2(QSizePolicy::Maximum, QSizePolicy::Maximum);
        sizePolicy2.setHorizontalStretch(0);
        sizePolicy2.setVerticalStretch(0);
        sizePolicy2.setHeightForWidth(labelPlayerNumber->sizePolicy().hasHeightForWidth());
        labelPlayerNumber->setSizePolicy(sizePolicy2);
        labelPlayerNumber->setAlignment(Qt::AlignLeading|Qt::AlignLeft|Qt::AlignVCenter);

        gridLayout->addWidget(labelPlayerNumber, 1, 1, 1, 1);

        textEditPlayerName = new QLineEdit(identificationTab);
        textEditPlayerName->setObjectName(QString::fromUtf8("textEditPlayerName"));
        QSizePolicy sizePolicy3(QSizePolicy::Expanding, QSizePolicy::Fixed);
        sizePolicy3.setHorizontalStretch(0);
        sizePolicy3.setVerticalStretch(0);
        sizePolicy3.setHeightForWidth(textEditPlayerName->sizePolicy().hasHeightForWidth());
        textEditPlayerName->setSizePolicy(sizePolicy3);

        gridLayout->addWidget(textEditPlayerName, 2, 1, 1, 1);

        label_2 = new QLabel(identificationTab);
        label_2->setObjectName(QString::fromUtf8("label_2"));
        QSizePolicy sizePolicy4(QSizePolicy::Preferred, QSizePolicy::MinimumExpanding);
        sizePolicy4.setHorizontalStretch(0);
        sizePolicy4.setVerticalStretch(0);
        sizePolicy4.setHeightForWidth(label_2->sizePolicy().hasHeightForWidth());
        label_2->setSizePolicy(sizePolicy4);
        label_2->setMinimumSize(QSize(0, 50));
        label_2->setAlignment(Qt::AlignLeading|Qt::AlignLeft|Qt::AlignTop);

        gridLayout->addWidget(label_2, 4, 0, 1, 2);

        verticalSpacer_4 = new QSpacerItem(20, 30, QSizePolicy::Minimum, QSizePolicy::Fixed);

        gridLayout->addItem(verticalSpacer_4, 3, 0, 1, 2);

        label_8 = new QLabel(identificationTab);
        label_8->setObjectName(QString::fromUtf8("label_8"));
        QSizePolicy sizePolicy5(QSizePolicy::Preferred, QSizePolicy::Minimum);
        sizePolicy5.setHorizontalStretch(0);
        sizePolicy5.setVerticalStretch(0);
        sizePolicy5.setHeightForWidth(label_8->sizePolicy().hasHeightForWidth());
        label_8->setSizePolicy(sizePolicy5);
        label_8->setMinimumSize(QSize(0, 40));
        QFont font1;
        font1.setPointSize(12);
        font1.setBold(true);
        font1.setWeight(75);
        label_8->setFont(font1);
        label_8->setLineWidth(0);
        label_8->setAlignment(Qt::AlignCenter);

        gridLayout->addWidget(label_8, 0, 0, 1, 2);

        playerEditorTabs->addTab(identificationTab, QString());
        stepPositionTab = new QWidget();
        stepPositionTab->setObjectName(QString::fromUtf8("stepPositionTab"));
        gridLayout_2 = new QGridLayout(stepPositionTab);
        gridLayout_2->setObjectName(QString::fromUtf8("gridLayout_2"));
        verticalSpacer_5 = new QSpacerItem(20, 30, QSizePolicy::Minimum, QSizePolicy::Minimum);

        gridLayout_2->addItem(verticalSpacer_5, 12, 0, 1, 3);

        verticalSpacer = new QSpacerItem(20, 30, QSizePolicy::Minimum, QSizePolicy::Fixed);

        gridLayout_2->addItem(verticalSpacer, 28, 0, 1, 4);

        rbPositionAbsolute = new QRadioButton(stepPositionTab);
        buttonGroup_2 = new QButtonGroup(SpPlayerEditorDialog);
        buttonGroup_2->setObjectName(QString::fromUtf8("buttonGroup_2"));
        buttonGroup_2->addButton(rbPositionAbsolute);
        rbPositionAbsolute->setObjectName(QString::fromUtf8("rbPositionAbsolute"));

        gridLayout_2->addWidget(rbPositionAbsolute, 4, 0, 1, 1);

        frame1 = new QFrame(stepPositionTab);
        frame1->setObjectName(QString::fromUtf8("frame1"));
        QSizePolicy sizePolicy6(QSizePolicy::MinimumExpanding, QSizePolicy::Fixed);
        sizePolicy6.setHorizontalStretch(0);
        sizePolicy6.setVerticalStretch(0);
        sizePolicy6.setHeightForWidth(frame1->sizePolicy().hasHeightForWidth());
        frame1->setSizePolicy(sizePolicy6);
        frame1->setMinimumSize(QSize(525, 40));
        frame1->setMaximumSize(QSize(16777215, 40));
        horizontalLayout_2 = new QHBoxLayout(frame1);
        horizontalLayout_2->setObjectName(QString::fromUtf8("horizontalLayout_2"));
        horizontalLayout_2->setSizeConstraint(QLayout::SetNoConstraint);
        horizontalSpacer_3 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout_2->addItem(horizontalSpacer_3);

        positionX = new QDoubleSpinBox(frame1);
        positionX->setObjectName(QString::fromUtf8("positionX"));
        sizePolicy6.setHeightForWidth(positionX->sizePolicy().hasHeightForWidth());
        positionX->setSizePolicy(sizePolicy6);
        positionX->setMaximumSize(QSize(121, 27));
        positionX->setMinimum(-99);
        positionX->setSingleStep(1);

        horizontalLayout_2->addWidget(positionX);

        label = new QLabel(frame1);
        label->setObjectName(QString::fromUtf8("label"));
        QSizePolicy sizePolicy7(QSizePolicy::Minimum, QSizePolicy::Maximum);
        sizePolicy7.setHorizontalStretch(0);
        sizePolicy7.setVerticalStretch(0);
        sizePolicy7.setHeightForWidth(label->sizePolicy().hasHeightForWidth());
        label->setSizePolicy(sizePolicy7);

        horizontalLayout_2->addWidget(label);

        positionY = new QDoubleSpinBox(frame1);
        positionY->setObjectName(QString::fromUtf8("positionY"));
        sizePolicy6.setHeightForWidth(positionY->sizePolicy().hasHeightForWidth());
        positionY->setSizePolicy(sizePolicy6);
        positionY->setMaximumSize(QSize(121, 27));
        positionY->setMinimum(-99);

        horizontalLayout_2->addWidget(positionY);

        label_9 = new QLabel(frame1);
        label_9->setObjectName(QString::fromUtf8("label_9"));
        sizePolicy7.setHeightForWidth(label_9->sizePolicy().hasHeightForWidth());
        label_9->setSizePolicy(sizePolicy7);

        horizontalLayout_2->addWidget(label_9);

        horizontalSpacer_2 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout_2->addItem(horizontalSpacer_2);


        gridLayout_2->addWidget(frame1, 1, 0, 1, 4);

        cbDummyPosition = new QCheckBox(stepPositionTab);
        cbDummyPosition->setObjectName(QString::fromUtf8("cbDummyPosition"));
        QSizePolicy sizePolicy8(QSizePolicy::Fixed, QSizePolicy::Fixed);
        sizePolicy8.setHorizontalStretch(0);
        sizePolicy8.setVerticalStretch(0);
        sizePolicy8.setHeightForWidth(cbDummyPosition->sizePolicy().hasHeightForWidth());
        cbDummyPosition->setSizePolicy(sizePolicy8);

        gridLayout_2->addWidget(cbDummyPosition, 2, 0, 1, 1);

        rbPositionRelativeToPlayer = new QRadioButton(stepPositionTab);
        buttonGroup_2->addButton(rbPositionRelativeToPlayer);
        rbPositionRelativeToPlayer->setObjectName(QString::fromUtf8("rbPositionRelativeToPlayer"));

        gridLayout_2->addWidget(rbPositionRelativeToPlayer, 10, 0, 1, 1);

        rbPositionRelativeToBall = new QRadioButton(stepPositionTab);
        buttonGroup_2->addButton(rbPositionRelativeToBall);
        rbPositionRelativeToBall->setObjectName(QString::fromUtf8("rbPositionRelativeToBall"));

        gridLayout_2->addWidget(rbPositionRelativeToBall, 6, 0, 1, 1);

        label_4 = new QLabel(stepPositionTab);
        label_4->setObjectName(QString::fromUtf8("label_4"));
        QSizePolicy sizePolicy9(QSizePolicy::MinimumExpanding, QSizePolicy::MinimumExpanding);
        sizePolicy9.setHorizontalStretch(0);
        sizePolicy9.setVerticalStretch(0);
        sizePolicy9.setHeightForWidth(label_4->sizePolicy().hasHeightForWidth());
        label_4->setSizePolicy(sizePolicy9);
        label_4->setMinimumSize(QSize(525, 50));
        label_4->setAlignment(Qt::AlignLeading|Qt::AlignLeft|Qt::AlignTop);

        gridLayout_2->addWidget(label_4, 29, 0, 1, 4);

        comboSelectRelativePlayerPosition = new QComboBox(stepPositionTab);
        comboSelectRelativePlayerPosition->setObjectName(QString::fromUtf8("comboSelectRelativePlayerPosition"));
        QSizePolicy sizePolicy10(QSizePolicy::Minimum, QSizePolicy::Fixed);
        sizePolicy10.setHorizontalStretch(0);
        sizePolicy10.setVerticalStretch(0);
        sizePolicy10.setHeightForWidth(comboSelectRelativePlayerPosition->sizePolicy().hasHeightForWidth());
        comboSelectRelativePlayerPosition->setSizePolicy(sizePolicy10);
        comboSelectRelativePlayerPosition->setMinimumSize(QSize(153, 27));
        comboSelectRelativePlayerPosition->setMaximumSize(QSize(200, 27));

        gridLayout_2->addWidget(comboSelectRelativePlayerPosition, 10, 1, 1, 2);

        nearOffsideLineCond = new QCheckBox(stepPositionTab);
        nearOffsideLineCond->setObjectName(QString::fromUtf8("nearOffsideLineCond"));
        QSizePolicy sizePolicy11(QSizePolicy::MinimumExpanding, QSizePolicy::Minimum);
        sizePolicy11.setHorizontalStretch(0);
        sizePolicy11.setVerticalStretch(0);
        sizePolicy11.setHeightForWidth(nearOffsideLineCond->sizePolicy().hasHeightForWidth());
        nearOffsideLineCond->setSizePolicy(sizePolicy11);
        nearOffsideLineCond->setMinimumSize(QSize(180, 22));
        nearOffsideLineCond->setMaximumSize(QSize(54645, 22));

        gridLayout_2->addWidget(nearOffsideLineCond, 15, 2, 1, 1);

        label_6 = new QLabel(stepPositionTab);
        label_6->setObjectName(QString::fromUtf8("label_6"));
        QSizePolicy sizePolicy12(QSizePolicy::Minimum, QSizePolicy::Minimum);
        sizePolicy12.setHorizontalStretch(0);
        sizePolicy12.setVerticalStretch(0);
        sizePolicy12.setHeightForWidth(label_6->sizePolicy().hasHeightForWidth());
        label_6->setSizePolicy(sizePolicy12);
        label_6->setMinimumSize(QSize(0, 40));
        label_6->setMaximumSize(QSize(16777215, 40));
        label_6->setFont(font1);
        label_6->setAlignment(Qt::AlignCenter);

        gridLayout_2->addWidget(label_6, 14, 0, 1, 3);

        stepPositionTitle = new QLabel(stepPositionTab);
        stepPositionTitle->setObjectName(QString::fromUtf8("stepPositionTitle"));
        sizePolicy5.setHeightForWidth(stepPositionTitle->sizePolicy().hasHeightForWidth());
        stepPositionTitle->setSizePolicy(sizePolicy5);
        stepPositionTitle->setMinimumSize(QSize(0, 40));
        stepPositionTitle->setMaximumSize(QSize(519, 40));
        stepPositionTitle->setFont(font1);
        stepPositionTitle->setAlignment(Qt::AlignCenter);

        gridLayout_2->addWidget(stepPositionTitle, 0, 0, 1, 3);

        onPositionCond = new QCheckBox(stepPositionTab);
        onPositionCond->setObjectName(QString::fromUtf8("onPositionCond"));
        sizePolicy11.setHeightForWidth(onPositionCond->sizePolicy().hasHeightForWidth());
        onPositionCond->setSizePolicy(sizePolicy11);
        onPositionCond->setMinimumSize(QSize(161, 22));
        onPositionCond->setMaximumSize(QSize(345345, 22));

        gridLayout_2->addWidget(onPositionCond, 15, 1, 1, 1);

        ballOwnerCond = new QCheckBox(stepPositionTab);
        ballOwnerCond->setObjectName(QString::fromUtf8("ballOwnerCond"));
        sizePolicy11.setHeightForWidth(ballOwnerCond->sizePolicy().hasHeightForWidth());
        ballOwnerCond->setSizePolicy(sizePolicy11);
        ballOwnerCond->setMinimumSize(QSize(160, 22));
        ballOwnerCond->setMaximumSize(QSize(35453, 22));

        gridLayout_2->addWidget(ballOwnerCond, 15, 0, 1, 1);

        playerEditorTabs->addTab(stepPositionTab, QString());
        transitionActionTab = new QWidget();
        transitionActionTab->setObjectName(QString::fromUtf8("transitionActionTab"));
        gridLayout_3 = new QGridLayout(transitionActionTab);
        gridLayout_3->setObjectName(QString::fromUtf8("gridLayout_3"));
        transitionTitle = new QLabel(transitionActionTab);
        transitionTitle->setObjectName(QString::fromUtf8("transitionTitle"));
        transitionTitle->setEnabled(true);
        sizePolicy5.setHeightForWidth(transitionTitle->sizePolicy().hasHeightForWidth());
        transitionTitle->setSizePolicy(sizePolicy5);
        transitionTitle->setMinimumSize(QSize(319, 40));
        transitionTitle->setFont(font1);
        transitionTitle->setAlignment(Qt::AlignCenter);

        gridLayout_3->addWidget(transitionTitle, 0, 0, 1, 3);

        actionLabel = new QLabel(transitionActionTab);
        actionLabel->setObjectName(QString::fromUtf8("actionLabel"));
        sizePolicy5.setHeightForWidth(actionLabel->sizePolicy().hasHeightForWidth());
        actionLabel->setSizePolicy(sizePolicy5);
        actionLabel->setMinimumSize(QSize(0, 50));
        actionLabel->setMaximumSize(QSize(16777215, 50));
        actionLabel->setFrameShape(QFrame::NoFrame);

        gridLayout_3->addWidget(actionLabel, 1, 0, 1, 2);

        actionImage = new QLabel(transitionActionTab);
        actionImage->setObjectName(QString::fromUtf8("actionImage"));
        actionImage->setEnabled(true);
        sizePolicy5.setHeightForWidth(actionImage->sizePolicy().hasHeightForWidth());
        actionImage->setSizePolicy(sizePolicy5);
        actionImage->setMinimumSize(QSize(0, 50));
        actionImage->setMaximumSize(QSize(16777215, 50));

        gridLayout_3->addWidget(actionImage, 1, 2, 1, 1);

        verticalSpacer_7 = new QSpacerItem(20, 30, QSizePolicy::Minimum, QSizePolicy::Fixed);

        gridLayout_3->addItem(verticalSpacer_7, 5, 0, 1, 3);

        label_5 = new QLabel(transitionActionTab);
        label_5->setObjectName(QString::fromUtf8("label_5"));
        sizePolicy4.setHeightForWidth(label_5->sizePolicy().hasHeightForWidth());
        label_5->setSizePolicy(sizePolicy4);
        label_5->setMinimumSize(QSize(0, 50));
        label_5->setAlignment(Qt::AlignLeading|Qt::AlignLeft|Qt::AlignTop);

        gridLayout_3->addWidget(label_5, 10, 0, 1, 3);

        label_14 = new QLabel(transitionActionTab);
        label_14->setObjectName(QString::fromUtf8("label_14"));
        sizePolicy5.setHeightForWidth(label_14->sizePolicy().hasHeightForWidth());
        label_14->setSizePolicy(sizePolicy5);
        label_14->setMinimumSize(QSize(0, 40));
        label_14->setFont(font1);
        label_14->setAlignment(Qt::AlignCenter);

        gridLayout_3->addWidget(label_14, 6, 0, 1, 3);

        cbActionCondition = new QCheckBox(transitionActionTab);
        cbActionCondition->setObjectName(QString::fromUtf8("cbActionCondition"));

        gridLayout_3->addWidget(cbActionCondition, 8, 0, 1, 1);

        verticalSpacer_2 = new QSpacerItem(20, 30, QSizePolicy::Minimum, QSizePolicy::Minimum);

        gridLayout_3->addItem(verticalSpacer_2, 9, 0, 1, 3);

        actionPositionFrame = new QFrame(transitionActionTab);
        actionPositionFrame->setObjectName(QString::fromUtf8("actionPositionFrame"));
        sizePolicy5.setHeightForWidth(actionPositionFrame->sizePolicy().hasHeightForWidth());
        actionPositionFrame->setSizePolicy(sizePolicy5);
        actionPositionFrame->setMinimumSize(QSize(525, 130));
        actionPositionFrame->setFrameShape(QFrame::NoFrame);
        actionPositionFrame->setFrameShadow(QFrame::Plain);
        actionPositionFrame->setLineWidth(0);
        gridLayout_5 = new QGridLayout(actionPositionFrame);
        gridLayout_5->setContentsMargins(0, 0, 0, 0);
        gridLayout_5->setObjectName(QString::fromUtf8("gridLayout_5"));
        gridLayout_5->setHorizontalSpacing(0);
        rbActionAbsolute = new QRadioButton(actionPositionFrame);
        rbActionAbsolute->setObjectName(QString::fromUtf8("rbActionAbsolute"));
        sizePolicy12.setHeightForWidth(rbActionAbsolute->sizePolicy().hasHeightForWidth());
        rbActionAbsolute->setSizePolicy(sizePolicy12);
        rbActionAbsolute->setMinimumSize(QSize(160, 22));

        gridLayout_5->addWidget(rbActionAbsolute, 1, 0, 1, 1);

        rbActionRelativeToBall = new QRadioButton(actionPositionFrame);
        rbActionRelativeToBall->setObjectName(QString::fromUtf8("rbActionRelativeToBall"));

        gridLayout_5->addWidget(rbActionRelativeToBall, 2, 0, 1, 1);

        rbActionRelativeToPlayer = new QRadioButton(actionPositionFrame);
        rbActionRelativeToPlayer->setObjectName(QString::fromUtf8("rbActionRelativeToPlayer"));

        gridLayout_5->addWidget(rbActionRelativeToPlayer, 5, 0, 1, 1);

        frame = new QFrame(actionPositionFrame);
        frame->setObjectName(QString::fromUtf8("frame"));
        sizePolicy5.setHeightForWidth(frame->sizePolicy().hasHeightForWidth());
        frame->setSizePolicy(sizePolicy5);
        frame->setMinimumSize(QSize(525, 40));
        frame->setMaximumSize(QSize(525, 40));
        frame->setLineWidth(0);
        horizontalLayout_3 = new QHBoxLayout(frame);
        horizontalLayout_3->setObjectName(QString::fromUtf8("horizontalLayout_3"));
        horizontalSpacer_4 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout_3->addItem(horizontalSpacer_4);

        actionX = new QDoubleSpinBox(frame);
        actionX->setObjectName(QString::fromUtf8("actionX"));
        sizePolicy6.setHeightForWidth(actionX->sizePolicy().hasHeightForWidth());
        actionX->setSizePolicy(sizePolicy6);
        actionX->setMaximumSize(QSize(121, 27));
        actionX->setMinimum(-99);
        actionX->setSingleStep(1);

        horizontalLayout_3->addWidget(actionX);

        label_7 = new QLabel(frame);
        label_7->setObjectName(QString::fromUtf8("label_7"));
        sizePolicy7.setHeightForWidth(label_7->sizePolicy().hasHeightForWidth());
        label_7->setSizePolicy(sizePolicy7);

        horizontalLayout_3->addWidget(label_7);

        actionY = new QDoubleSpinBox(frame);
        actionY->setObjectName(QString::fromUtf8("actionY"));
        sizePolicy6.setHeightForWidth(actionY->sizePolicy().hasHeightForWidth());
        actionY->setSizePolicy(sizePolicy6);
        actionY->setMaximumSize(QSize(121, 27));
        actionY->setMinimum(-99);

        horizontalLayout_3->addWidget(actionY);

        label_11 = new QLabel(frame);
        label_11->setObjectName(QString::fromUtf8("label_11"));
        sizePolicy7.setHeightForWidth(label_11->sizePolicy().hasHeightForWidth());
        label_11->setSizePolicy(sizePolicy7);

        horizontalLayout_3->addWidget(label_11);

        horizontalSpacer_5 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout_3->addItem(horizontalSpacer_5);


        gridLayout_5->addWidget(frame, 0, 0, 1, 1);

        horizontalSpacer = new QSpacerItem(200, 20, QSizePolicy::MinimumExpanding, QSizePolicy::Minimum);

        gridLayout_5->addItem(horizontalSpacer, 5, 2, 1, 1);

        comboSelectActionRelativePlayer = new QComboBox(actionPositionFrame);
        comboSelectActionRelativePlayer->setObjectName(QString::fromUtf8("comboSelectActionRelativePlayer"));
        comboSelectActionRelativePlayer->setMinimumSize(QSize(153, 27));

        gridLayout_5->addWidget(comboSelectActionRelativePlayer, 5, 1, 1, 1);


        gridLayout_3->addWidget(actionPositionFrame, 2, 0, 1, 3);

        playerEditorTabs->addTab(transitionActionTab, QString());

        gridLayout_4->addWidget(playerEditorTabs, 0, 0, 1, 1);

        frame_1 = new QFrame(SpPlayerEditorDialog);
        frame_1->setObjectName(QString::fromUtf8("frame_1"));
        sizePolicy5.setHeightForWidth(frame_1->sizePolicy().hasHeightForWidth());
        frame_1->setSizePolicy(sizePolicy5);
        frame_1->setMinimumSize(QSize(547, 45));
        frame_1->setMaximumSize(QSize(547, 45));
        horizontalLayout_4 = new QHBoxLayout(frame_1);
        horizontalLayout_4->setObjectName(QString::fromUtf8("horizontalLayout_4"));
        horizontalLayout_4->setSizeConstraint(QLayout::SetDefaultConstraint);
        cancelButton = new QPushButton(frame_1);
        cancelButton->setObjectName(QString::fromUtf8("cancelButton"));

        horizontalLayout_4->addWidget(cancelButton);

        saveButton = new QPushButton(frame_1);
        saveButton->setObjectName(QString::fromUtf8("saveButton"));
        saveButton->setDefault(true);

        horizontalLayout_4->addWidget(saveButton);

        resetButton = new QPushButton(frame_1);
        resetButton->setObjectName(QString::fromUtf8("resetButton"));

        horizontalLayout_4->addWidget(resetButton);


        gridLayout_4->addWidget(frame_1, 1, 0, 1, 1);

        QWidget::setTabOrder(playerEditorTabs, rbByNumber);
        QWidget::setTabOrder(rbByNumber, rbByName);
        QWidget::setTabOrder(rbByName, textEditPlayerName);
        QWidget::setTabOrder(textEditPlayerName, positionX);
        QWidget::setTabOrder(positionX, positionY);
        QWidget::setTabOrder(positionY, cbDummyPosition);
        QWidget::setTabOrder(cbDummyPosition, rbPositionAbsolute);
        QWidget::setTabOrder(rbPositionAbsolute, rbPositionRelativeToBall);
        QWidget::setTabOrder(rbPositionRelativeToBall, rbPositionRelativeToPlayer);
        QWidget::setTabOrder(rbPositionRelativeToPlayer, comboSelectRelativePlayerPosition);
        QWidget::setTabOrder(comboSelectRelativePlayerPosition, ballOwnerCond);
        QWidget::setTabOrder(ballOwnerCond, onPositionCond);
        QWidget::setTabOrder(onPositionCond, nearOffsideLineCond);
        QWidget::setTabOrder(nearOffsideLineCond, actionX);
        QWidget::setTabOrder(actionX, actionY);
        QWidget::setTabOrder(actionY, rbActionAbsolute);
        QWidget::setTabOrder(rbActionAbsolute, rbActionRelativeToBall);
        QWidget::setTabOrder(rbActionRelativeToBall, rbActionRelativeToPlayer);
        QWidget::setTabOrder(rbActionRelativeToPlayer, comboSelectActionRelativePlayer);
        QWidget::setTabOrder(comboSelectActionRelativePlayer, cbActionCondition);
        QWidget::setTabOrder(cbActionCondition, cancelButton);
        QWidget::setTabOrder(cancelButton, saveButton);
        QWidget::setTabOrder(saveButton, resetButton);

        retranslateUi(SpPlayerEditorDialog);

        playerEditorTabs->setCurrentIndex(1);


        QMetaObject::connectSlotsByName(SpPlayerEditorDialog);
    } // setupUi

    void retranslateUi(QDialog *SpPlayerEditorDialog)
    {
        SpPlayerEditorDialog->setWindowTitle(QApplication::translate("SpPlayerEditorDialog", "Player editor:", 0, QApplication::UnicodeUTF8));
        rbByNumber->setText(QApplication::translate("SpPlayerEditorDialog", "By number", 0, QApplication::UnicodeUTF8));
        rbByName->setText(QApplication::translate("SpPlayerEditorDialog", "By role name", 0, QApplication::UnicodeUTF8));
        labelPlayerNumber->setText(QApplication::translate("SpPlayerEditorDialog", "number", 0, QApplication::UnicodeUTF8));
        textEditPlayerName->setInputMask(QString());
        textEditPlayerName->setText(QString());
        label_2->setText(QApplication::translate("SpPlayerEditorDialog", "Help:", 0, QApplication::UnicodeUTF8));
        label_8->setText(QApplication::translate("SpPlayerEditorDialog", "Player Identification", 0, QApplication::UnicodeUTF8));
        playerEditorTabs->setTabText(playerEditorTabs->indexOf(identificationTab), QApplication::translate("SpPlayerEditorDialog", "Identification", 0, QApplication::UnicodeUTF8));
        rbPositionAbsolute->setText(QApplication::translate("SpPlayerEditorDialog", "Absolute", 0, QApplication::UnicodeUTF8));
        label->setText(QApplication::translate("SpPlayerEditorDialog", "x", 0, QApplication::UnicodeUTF8));
        label_9->setText(QApplication::translate("SpPlayerEditorDialog", "y", 0, QApplication::UnicodeUTF8));
        cbDummyPosition->setText(QApplication::translate("SpPlayerEditorDialog", "Dummy", 0, QApplication::UnicodeUTF8));
        rbPositionRelativeToPlayer->setText(QApplication::translate("SpPlayerEditorDialog", "Relative... to player", 0, QApplication::UnicodeUTF8));
        rbPositionRelativeToBall->setText(QApplication::translate("SpPlayerEditorDialog", "Relative ... to ball", 0, QApplication::UnicodeUTF8));
        label_4->setText(QApplication::translate("SpPlayerEditorDialog", "Help:", 0, QApplication::UnicodeUTF8));
        nearOffsideLineCond->setText(QApplication::translate("SpPlayerEditorDialog", "Near offside line", 0, QApplication::UnicodeUTF8));
        label_6->setText(QApplication::translate("SpPlayerEditorDialog", "Player conditions on current step", 0, QApplication::UnicodeUTF8));
        stepPositionTitle->setText(QApplication::translate("SpPlayerEditorDialog", "Step XPTO player position", 0, QApplication::UnicodeUTF8));
        onPositionCond->setText(QApplication::translate("SpPlayerEditorDialog", "On position", 0, QApplication::UnicodeUTF8));
        ballOwnerCond->setText(QApplication::translate("SpPlayerEditorDialog", "Is the ball owner", 0, QApplication::UnicodeUTF8));
        playerEditorTabs->setTabText(playerEditorTabs->indexOf(stepPositionTab), QApplication::translate("SpPlayerEditorDialog", "Step Position", 0, QApplication::UnicodeUTF8));
        transitionTitle->setText(QApplication::translate("SpPlayerEditorDialog", "Transition from step  XPTO to step XPTO", 0, QApplication::UnicodeUTF8));
        actionLabel->setText(QApplication::translate("SpPlayerEditorDialog", "Action", 0, QApplication::UnicodeUTF8));
        actionImage->setText(QApplication::translate("SpPlayerEditorDialog", "IMAGE", 0, QApplication::UnicodeUTF8));
        label_5->setText(QApplication::translate("SpPlayerEditorDialog", "Help:", 0, QApplication::UnicodeUTF8));
        label_14->setText(QApplication::translate("SpPlayerEditorDialog", "Transition conditions for action on current transition", 0, QApplication::UnicodeUTF8));
        cbActionCondition->setText(QApplication::translate("SpPlayerEditorDialog", "action Condition", 0, QApplication::UnicodeUTF8));
        rbActionAbsolute->setText(QApplication::translate("SpPlayerEditorDialog", "Absolute", 0, QApplication::UnicodeUTF8));
        rbActionRelativeToBall->setText(QApplication::translate("SpPlayerEditorDialog", "Relative ... to ball", 0, QApplication::UnicodeUTF8));
        rbActionRelativeToPlayer->setText(QApplication::translate("SpPlayerEditorDialog", "Relative... to player", 0, QApplication::UnicodeUTF8));
        label_7->setText(QApplication::translate("SpPlayerEditorDialog", "x", 0, QApplication::UnicodeUTF8));
        label_11->setText(QApplication::translate("SpPlayerEditorDialog", "y", 0, QApplication::UnicodeUTF8));
        playerEditorTabs->setTabText(playerEditorTabs->indexOf(transitionActionTab), QApplication::translate("SpPlayerEditorDialog", "Transition Action", 0, QApplication::UnicodeUTF8));
        cancelButton->setText(QApplication::translate("SpPlayerEditorDialog", "Cancel", 0, QApplication::UnicodeUTF8));
        saveButton->setText(QApplication::translate("SpPlayerEditorDialog", "Save", 0, QApplication::UnicodeUTF8));
        resetButton->setText(QApplication::translate("SpPlayerEditorDialog", "Reset", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class SpPlayerEditorDialog: public Ui_SpPlayerEditorDialog {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_SPPLAYEREDITORDIALOG_H
