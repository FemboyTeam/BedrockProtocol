<?php

/*
 * This file is part of forked BedrockProtocol by FemboyTeam.
 * Link: https://github.com/FemboyTeam/BedrockProtocol/
 * Copyright (C) 2014-2022 PocketMine Team <https://github.com/pmmp/BedrockProtocol>
 *
 *  ⠀⠀⣽⣿⣿⣿⣧⠀⠀⠀⠠⣤⣄⡀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⡆⠀
 *  ⠀⢀⣿⣿⣿⣿⣿⣷⡀⠀⠀⢿⣿⣿⣦⡀⠀⣰⣿⣿⣿⣿⣿⣿⡇⠀
 *  ⠀⢸⣿⣿⣿⣿⣿⣿⡿⠄⣠⣤⣿⣿⣿⣿⣄⣿⣿⣿⣿⣿⣿⣿⡇⠀
 *  ⠀⢸⣿⣿⣿⣿⣿⣿⣤⣬⣭⣬⣬⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀
 *  ⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠀
 *  ⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠿⠿⠿⣿⣿⡿⠀⠀
 *  ⠀⠀⠸⣿⣧⠀⣴⡆⠀⠀⢸⣿⣿⣿⣿⠀⠀⢸⣿⡌⣶⣿⠟⠁⠀⠀
 *  ⠀⠀⠀⠹⡿⢸⣿⡇⠀⠀⢸⣿⣿⣿⣿⠀⠀⢈⣿⡇⢸⣯⣤⣤⠀⠀
 *  ⠀⠙⣿⣿⣇⢸⣿⣇⠀⢀⣾⡿⢿⣿⣿⣀⣀⣼⣿⡇⣸⣿⡿⠁⠀⠀
 *  ⠀⠀⢀⡟⡉⠞⢻⣿⣿⣿⣿⣶⣾⣿⣿⣿⣿⣿⠋⠘⣹⣿⡄⠀⠀⠀
 *  ⠀⠀⣼⣿⣧⣶⣿⣿⣿⣟⠻⢋⣍⣉⣋⣼⣿⣿⣿⣶⢿⣿⣿⡄⠀⠀
 *  ⠀⠀⠉⠉⠀⠙⠻⢿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠛⠁⠀⠉⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠠⣬⣭⣽⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⣿⣿⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⠼⢿⣿⣿⣿⣿⣿⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀
 *
 * BedrockProtocol is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol;

/**
 * This class is an automatically generated stub. Do not edit it manually.
 */
interface PacketTranslatorInterface{
	public function translateLogin(LoginPacket $packet) : ?LoginPacket;

	public function translatePlayStatus(PlayStatusPacket $packet) : ?PlayStatusPacket;

	public function translateServerToClientHandshake(ServerToClientHandshakePacket $packet) : ?ServerToClientHandshakePacket;

	public function translateClientToServerHandshake(ClientToServerHandshakePacket $packet) : ?ClientToServerHandshakePacket;

	public function translateDisconnect(DisconnectPacket $packet) : ?DisconnectPacket;

	public function translateResourcePacksInfo(ResourcePacksInfoPacket $packet) : ?ResourcePacksInfoPacket;

	public function translateResourcePackStack(ResourcePackStackPacket $packet) : ?ResourcePackStackPacket;

	public function translateResourcePackClientResponse(ResourcePackClientResponsePacket $packet) : ?ResourcePackClientResponsePacket;

	public function translateText(TextPacket $packet) : ?TextPacket;

	public function translateSetTime(SetTimePacket $packet) : ?SetTimePacket;

	public function translateStartGame(StartGamePacket $packet) : ?StartGamePacket;

	public function translateAddPlayer(AddPlayerPacket $packet) : ?AddPlayerPacket;

	public function translateAddActor(AddActorPacket $packet) : ?AddActorPacket;

	public function translateRemoveActor(RemoveActorPacket $packet) : ?RemoveActorPacket;

	public function translateAddItemActor(AddItemActorPacket $packet) : ?AddItemActorPacket;

	public function translateTakeItemActor(TakeItemActorPacket $packet) : ?TakeItemActorPacket;

	public function translateMoveActorAbsolute(MoveActorAbsolutePacket $packet) : ?MoveActorAbsolutePacket;

	public function translateMovePlayer(MovePlayerPacket $packet) : ?MovePlayerPacket;

	public function translatePassengerJump(PassengerJumpPacket $packet) : ?PassengerJumpPacket;

	public function translateUpdateBlock(UpdateBlockPacket $packet) : ?UpdateBlockPacket;

	public function translateAddPainting(AddPaintingPacket $packet) : ?AddPaintingPacket;

	public function translateTickSync(TickSyncPacket $packet) : ?TickSyncPacket;

	public function translateLevelSoundEventPacketV1(LevelSoundEventPacketV1 $packet) : ?LevelSoundEventPacketV1;

	public function translateLevelEvent(LevelEventPacket $packet) : ?LevelEventPacket;

	public function translateBlockEvent(BlockEventPacket $packet) : ?BlockEventPacket;

	public function translateActorEvent(ActorEventPacket $packet) : ?ActorEventPacket;

	public function translateMobEffect(MobEffectPacket $packet) : ?MobEffectPacket;

	public function translateUpdateAttributes(UpdateAttributesPacket $packet) : ?UpdateAttributesPacket;

	public function translateInventoryTransaction(InventoryTransactionPacket $packet) : ?InventoryTransactionPacket;

	public function translateMobEquipment(MobEquipmentPacket $packet) : ?MobEquipmentPacket;

	public function translateMobArmorEquipment(MobArmorEquipmentPacket $packet) : ?MobArmorEquipmentPacket;

	public function translateInteract(InteractPacket $packet) : ?InteractPacket;

	public function translateBlockPickRequest(BlockPickRequestPacket $packet) : ?BlockPickRequestPacket;

	public function translateActorPickRequest(ActorPickRequestPacket $packet) : ?ActorPickRequestPacket;

	public function translatePlayerAction(PlayerActionPacket $packet) : ?PlayerActionPacket;

	public function translateHurtArmor(HurtArmorPacket $packet) : ?HurtArmorPacket;

	public function translateSetActorData(SetActorDataPacket $packet) : ?SetActorDataPacket;

	public function translateSetActorMotion(SetActorMotionPacket $packet) : ?SetActorMotionPacket;

	public function translateSetActorLink(SetActorLinkPacket $packet) : ?SetActorLinkPacket;

	public function translateSetHealth(SetHealthPacket $packet) : ?SetHealthPacket;

	public function translateSetSpawnPosition(SetSpawnPositionPacket $packet) : ?SetSpawnPositionPacket;

	public function translateAnimate(AnimatePacket $packet) : ?AnimatePacket;

	public function translateRespawn(RespawnPacket $packet) : ?RespawnPacket;

	public function translateContainerOpen(ContainerOpenPacket $packet) : ?ContainerOpenPacket;

	public function translateContainerClose(ContainerClosePacket $packet) : ?ContainerClosePacket;

	public function translatePlayerHotbar(PlayerHotbarPacket $packet) : ?PlayerHotbarPacket;

	public function translateInventoryContent(InventoryContentPacket $packet) : ?InventoryContentPacket;

	public function translateInventorySlot(InventorySlotPacket $packet) : ?InventorySlotPacket;

	public function translateContainerSetData(ContainerSetDataPacket $packet) : ?ContainerSetDataPacket;

	public function translateCraftingData(CraftingDataPacket $packet) : ?CraftingDataPacket;

	public function translateCraftingEvent(CraftingEventPacket $packet) : ?CraftingEventPacket;

	public function translateGuiDataPickItem(GuiDataPickItemPacket $packet) : ?GuiDataPickItemPacket;

	public function translateBlockActorData(BlockActorDataPacket $packet) : ?BlockActorDataPacket;

	public function translatePlayerInput(PlayerInputPacket $packet) : ?PlayerInputPacket;

	public function translateLevelChunk(LevelChunkPacket $packet) : ?LevelChunkPacket;

	public function translateSetCommandsEnabled(SetCommandsEnabledPacket $packet) : ?SetCommandsEnabledPacket;

	public function translateSetDifficulty(SetDifficultyPacket $packet) : ?SetDifficultyPacket;

	public function translateChangeDimension(ChangeDimensionPacket $packet) : ?ChangeDimensionPacket;

	public function translateSetPlayerGameType(SetPlayerGameTypePacket $packet) : ?SetPlayerGameTypePacket;

	public function translatePlayerList(PlayerListPacket $packet) : ?PlayerListPacket;

	public function translateSimpleEvent(SimpleEventPacket $packet) : ?SimpleEventPacket;

	public function translateLegacyTelemetryEvent(LegacyTelemetryEventPacket $packet) : ?LegacyTelemetryEventPacket;

	public function translateSpawnExperienceOrb(SpawnExperienceOrbPacket $packet) : ?SpawnExperienceOrbPacket;

	public function translateClientboundMapItemData(ClientboundMapItemDataPacket $packet) : ?ClientboundMapItemDataPacket;

	public function translateMapInfoRequest(MapInfoRequestPacket $packet) : ?MapInfoRequestPacket;

	public function translateRequestChunkRadius(RequestChunkRadiusPacket $packet) : ?RequestChunkRadiusPacket;

	public function translateChunkRadiusUpdated(ChunkRadiusUpdatedPacket $packet) : ?ChunkRadiusUpdatedPacket;

	public function translateItemFrameDropItem(ItemFrameDropItemPacket $packet) : ?ItemFrameDropItemPacket;

	public function translateGameRulesChanged(GameRulesChangedPacket $packet) : ?GameRulesChangedPacket;

	public function translateCamera(CameraPacket $packet) : ?CameraPacket;

	public function translateBossEvent(BossEventPacket $packet) : ?BossEventPacket;

	public function translateShowCredits(ShowCreditsPacket $packet) : ?ShowCreditsPacket;

	public function translateAvailableCommands(AvailableCommandsPacket $packet) : ?AvailableCommandsPacket;

	public function translateCommandRequest(CommandRequestPacket $packet) : ?CommandRequestPacket;

	public function translateCommandBlockUpdate(CommandBlockUpdatePacket $packet) : ?CommandBlockUpdatePacket;

	public function translateCommandOutput(CommandOutputPacket $packet) : ?CommandOutputPacket;

	public function translateUpdateTrade(UpdateTradePacket $packet) : ?UpdateTradePacket;

	public function translateUpdateEquip(UpdateEquipPacket $packet) : ?UpdateEquipPacket;

	public function translateResourcePackDataInfo(ResourcePackDataInfoPacket $packet) : ?ResourcePackDataInfoPacket;

	public function translateResourcePackChunkData(ResourcePackChunkDataPacket $packet) : ?ResourcePackChunkDataPacket;

	public function translateResourcePackChunkRequest(ResourcePackChunkRequestPacket $packet) : ?ResourcePackChunkRequestPacket;

	public function translateTransfer(TransferPacket $packet) : ?TransferPacket;

	public function translatePlaySound(PlaySoundPacket $packet) : ?PlaySoundPacket;

	public function translateStopSound(StopSoundPacket $packet) : ?StopSoundPacket;

	public function translateSetTitle(SetTitlePacket $packet) : ?SetTitlePacket;

	public function translateAddBehaviorTree(AddBehaviorTreePacket $packet) : ?AddBehaviorTreePacket;

	public function translateStructureBlockUpdate(StructureBlockUpdatePacket $packet) : ?StructureBlockUpdatePacket;

	public function translateShowStoreOffer(ShowStoreOfferPacket $packet) : ?ShowStoreOfferPacket;

	public function translatePurchaseReceipt(PurchaseReceiptPacket $packet) : ?PurchaseReceiptPacket;

	public function translatePlayerSkin(PlayerSkinPacket $packet) : ?PlayerSkinPacket;

	public function translateSubClientLogin(SubClientLoginPacket $packet) : ?SubClientLoginPacket;

	public function translateAutomationClientConnect(AutomationClientConnectPacket $packet) : ?AutomationClientConnectPacket;

	public function translateSetLastHurtBy(SetLastHurtByPacket $packet) : ?SetLastHurtByPacket;

	public function translateBookEdit(BookEditPacket $packet) : ?BookEditPacket;

	public function translateNpcRequest(NpcRequestPacket $packet) : ?NpcRequestPacket;

	public function translatePhotoTransfer(PhotoTransferPacket $packet) : ?PhotoTransferPacket;

	public function translateModalFormRequest(ModalFormRequestPacket $packet) : ?ModalFormRequestPacket;

	public function translateModalFormResponse(ModalFormResponsePacket $packet) : ?ModalFormResponsePacket;

	public function translateServerSettingsRequest(ServerSettingsRequestPacket $packet) : ?ServerSettingsRequestPacket;

	public function translateServerSettingsResponse(ServerSettingsResponsePacket $packet) : ?ServerSettingsResponsePacket;

	public function translateShowProfile(ShowProfilePacket $packet) : ?ShowProfilePacket;

	public function translateSetDefaultGameType(SetDefaultGameTypePacket $packet) : ?SetDefaultGameTypePacket;

	public function translateRemoveObjective(RemoveObjectivePacket $packet) : ?RemoveObjectivePacket;

	public function translateSetDisplayObjective(SetDisplayObjectivePacket $packet) : ?SetDisplayObjectivePacket;

	public function translateSetScore(SetScorePacket $packet) : ?SetScorePacket;

	public function translateLabTable(LabTablePacket $packet) : ?LabTablePacket;

	public function translateUpdateBlockSynced(UpdateBlockSyncedPacket $packet) : ?UpdateBlockSyncedPacket;

	public function translateMoveActorDelta(MoveActorDeltaPacket $packet) : ?MoveActorDeltaPacket;

	public function translateSetScoreboardIdentity(SetScoreboardIdentityPacket $packet) : ?SetScoreboardIdentityPacket;

	public function translateSetLocalPlayerAsInitialized(SetLocalPlayerAsInitializedPacket $packet) : ?SetLocalPlayerAsInitializedPacket;

	public function translateUpdateSoftEnum(UpdateSoftEnumPacket $packet) : ?UpdateSoftEnumPacket;

	public function translateNetworkStackLatency(NetworkStackLatencyPacket $packet) : ?NetworkStackLatencyPacket;

	public function translateSpawnParticleEffect(SpawnParticleEffectPacket $packet) : ?SpawnParticleEffectPacket;

	public function translateAvailableActorIdentifiers(AvailableActorIdentifiersPacket $packet) : ?AvailableActorIdentifiersPacket;

	public function translateLevelSoundEventPacketV2(LevelSoundEventPacketV2 $packet) : ?LevelSoundEventPacketV2;

	public function translateNetworkChunkPublisherUpdate(NetworkChunkPublisherUpdatePacket $packet) : ?NetworkChunkPublisherUpdatePacket;

	public function translateBiomeDefinitionList(BiomeDefinitionListPacket $packet) : ?BiomeDefinitionListPacket;

	public function translateLevelSoundEvent(LevelSoundEventPacket $packet) : ?LevelSoundEventPacket;

	public function translateLevelEventGeneric(LevelEventGenericPacket $packet) : ?LevelEventGenericPacket;

	public function translateLecternUpdate(LecternUpdatePacket $packet) : ?LecternUpdatePacket;

	public function translateAddEntity(AddEntityPacket $packet) : ?AddEntityPacket;

	public function translateRemoveEntity(RemoveEntityPacket $packet) : ?RemoveEntityPacket;

	public function translateClientCacheStatus(ClientCacheStatusPacket $packet) : ?ClientCacheStatusPacket;

	public function translateOnScreenTextureAnimation(OnScreenTextureAnimationPacket $packet) : ?OnScreenTextureAnimationPacket;

	public function translateMapCreateLockedCopy(MapCreateLockedCopyPacket $packet) : ?MapCreateLockedCopyPacket;

	public function translateStructureTemplateDataRequest(StructureTemplateDataRequestPacket $packet) : ?StructureTemplateDataRequestPacket;

	public function translateStructureTemplateDataResponse(StructureTemplateDataResponsePacket $packet) : ?StructureTemplateDataResponsePacket;

	public function translateClientCacheBlobStatus(ClientCacheBlobStatusPacket $packet) : ?ClientCacheBlobStatusPacket;

	public function translateClientCacheMissResponse(ClientCacheMissResponsePacket $packet) : ?ClientCacheMissResponsePacket;

	public function translateEducationSettings(EducationSettingsPacket $packet) : ?EducationSettingsPacket;

	public function translateEmote(EmotePacket $packet) : ?EmotePacket;

	public function translateMultiplayerSettings(MultiplayerSettingsPacket $packet) : ?MultiplayerSettingsPacket;

	public function translateSettingsCommand(SettingsCommandPacket $packet) : ?SettingsCommandPacket;

	public function translateAnvilDamage(AnvilDamagePacket $packet) : ?AnvilDamagePacket;

	public function translateCompletedUsingItem(CompletedUsingItemPacket $packet) : ?CompletedUsingItemPacket;

	public function translateNetworkSettings(NetworkSettingsPacket $packet) : ?NetworkSettingsPacket;

	public function translatePlayerAuthInput(PlayerAuthInputPacket $packet) : ?PlayerAuthInputPacket;

	public function translateCreativeContent(CreativeContentPacket $packet) : ?CreativeContentPacket;

	public function translatePlayerEnchantOptions(PlayerEnchantOptionsPacket $packet) : ?PlayerEnchantOptionsPacket;

	public function translateItemStackRequest(ItemStackRequestPacket $packet) : ?ItemStackRequestPacket;

	public function translateItemStackResponse(ItemStackResponsePacket $packet) : ?ItemStackResponsePacket;

	public function translatePlayerArmorDamage(PlayerArmorDamagePacket $packet) : ?PlayerArmorDamagePacket;

	public function translateCodeBuilder(CodeBuilderPacket $packet) : ?CodeBuilderPacket;

	public function translateUpdatePlayerGameType(UpdatePlayerGameTypePacket $packet) : ?UpdatePlayerGameTypePacket;

	public function translateEmoteList(EmoteListPacket $packet) : ?EmoteListPacket;

	public function translatePositionTrackingDBServerBroadcast(PositionTrackingDBServerBroadcastPacket $packet) : ?PositionTrackingDBServerBroadcastPacket;

	public function translatePositionTrackingDBClientRequest(PositionTrackingDBClientRequestPacket $packet) : ?PositionTrackingDBClientRequestPacket;

	public function translateDebugInfo(DebugInfoPacket $packet) : ?DebugInfoPacket;

	public function translatePacketViolationWarning(PacketViolationWarningPacket $packet) : ?PacketViolationWarningPacket;

	public function translateMotionPredictionHints(MotionPredictionHintsPacket $packet) : ?MotionPredictionHintsPacket;

	public function translateAnimateEntity(AnimateEntityPacket $packet) : ?AnimateEntityPacket;

	public function translateCameraShake(CameraShakePacket $packet) : ?CameraShakePacket;

	public function translatePlayerFog(PlayerFogPacket $packet) : ?PlayerFogPacket;

	public function translateCorrectPlayerMovePrediction(CorrectPlayerMovePredictionPacket $packet) : ?CorrectPlayerMovePredictionPacket;

	public function translateItemComponent(ItemComponentPacket $packet) : ?ItemComponentPacket;

	public function translateFilterText(FilterTextPacket $packet) : ?FilterTextPacket;

	public function translateClientboundDebugRenderer(ClientboundDebugRendererPacket $packet) : ?ClientboundDebugRendererPacket;

	public function translateSyncActorProperty(SyncActorPropertyPacket $packet) : ?SyncActorPropertyPacket;

	public function translateAddVolumeEntity(AddVolumeEntityPacket $packet) : ?AddVolumeEntityPacket;

	public function translateRemoveVolumeEntity(RemoveVolumeEntityPacket $packet) : ?RemoveVolumeEntityPacket;

	public function translateSimulationType(SimulationTypePacket $packet) : ?SimulationTypePacket;

	public function translateNpcDialogue(NpcDialoguePacket $packet) : ?NpcDialoguePacket;

	public function translateEduUriResource(EduUriResourcePacket $packet) : ?EduUriResourcePacket;

	public function translateCreatePhoto(CreatePhotoPacket $packet) : ?CreatePhotoPacket;

	public function translateUpdateSubChunkBlocks(UpdateSubChunkBlocksPacket $packet) : ?UpdateSubChunkBlocksPacket;

	public function translateSubChunk(SubChunkPacket $packet) : ?SubChunkPacket;

	public function translateSubChunkRequest(SubChunkRequestPacket $packet) : ?SubChunkRequestPacket;

	public function translatePlayerStartItemCooldown(PlayerStartItemCooldownPacket $packet) : ?PlayerStartItemCooldownPacket;

	public function translateScriptMessage(ScriptMessagePacket $packet) : ?ScriptMessagePacket;

	public function translateCodeBuilderSource(CodeBuilderSourcePacket $packet) : ?CodeBuilderSourcePacket;

	public function translateTickingAreasLoadStatus(TickingAreasLoadStatusPacket $packet) : ?TickingAreasLoadStatusPacket;

	public function translateDimensionData(DimensionDataPacket $packet) : ?DimensionDataPacket;

	public function translateAgentActionEvent(AgentActionEventPacket $packet) : ?AgentActionEventPacket;

	public function translateChangeMobProperty(ChangeMobPropertyPacket $packet) : ?ChangeMobPropertyPacket;

	public function translateLessonProgress(LessonProgressPacket $packet) : ?LessonProgressPacket;

	public function translateRequestAbility(RequestAbilityPacket $packet) : ?RequestAbilityPacket;

	public function translateRequestPermissions(RequestPermissionsPacket $packet) : ?RequestPermissionsPacket;

	public function translateToastRequest(ToastRequestPacket $packet) : ?ToastRequestPacket;

	public function translateUpdateAbilities(UpdateAbilitiesPacket $packet) : ?UpdateAbilitiesPacket;

	public function translateUpdateAdventureSettings(UpdateAdventureSettingsPacket $packet) : ?UpdateAdventureSettingsPacket;

	public function translateDeathInfo(DeathInfoPacket $packet) : ?DeathInfoPacket;

	public function translateEditorNetwork(EditorNetworkPacket $packet) : ?EditorNetworkPacket;

	public function translateFeatureRegistry(FeatureRegistryPacket $packet) : ?FeatureRegistryPacket;

	public function translateServerStats(ServerStatsPacket $packet) : ?ServerStatsPacket;

	public function translateRequestNetworkSettings(RequestNetworkSettingsPacket $packet) : ?RequestNetworkSettingsPacket;

	public function translateGameTestRequest(GameTestRequestPacket $packet) : ?GameTestRequestPacket;

	public function translateGameTestResults(GameTestResultsPacket $packet) : ?GameTestResultsPacket;

	public function translateUpdateClientInputLocks(UpdateClientInputLocksPacket $packet) : ?UpdateClientInputLocksPacket;

	public function translateCameraPresets(CameraPresetsPacket $packet) : ?CameraPresetsPacket;

	public function translateUnlockedRecipes(UnlockedRecipesPacket $packet) : ?UnlockedRecipesPacket;

	public function translateCameraInstruction(CameraInstructionPacket $packet) : ?CameraInstructionPacket;

	public function translateCompressedBiomeDefinitionList(CompressedBiomeDefinitionListPacket $packet) : ?CompressedBiomeDefinitionListPacket;

	public function translateTrimData(TrimDataPacket $packet) : ?TrimDataPacket;

	public function translateOpenSign(OpenSignPacket $packet) : ?OpenSignPacket;

	public function translateAgentAnimation(AgentAnimationPacket $packet) : ?AgentAnimationPacket;

	public function translateRefreshEntitlements(RefreshEntitlementsPacket $packet) : ?RefreshEntitlementsPacket;

	public function translatePlayerToggleCrafterSlotRequest(PlayerToggleCrafterSlotRequestPacket $packet) : ?PlayerToggleCrafterSlotRequestPacket;

	public function translateSetPlayerInventoryOptions(SetPlayerInventoryOptionsPacket $packet) : ?SetPlayerInventoryOptionsPacket;
}
