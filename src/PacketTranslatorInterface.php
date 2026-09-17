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
	public function translateLogin(LoginPacket $packet) : bool;

	public function translatePlayStatus(PlayStatusPacket $packet) : bool;

	public function translateServerToClientHandshake(ServerToClientHandshakePacket $packet) : bool;

	public function translateClientToServerHandshake(ClientToServerHandshakePacket $packet) : bool;

	public function translateDisconnect(DisconnectPacket $packet) : bool;

	public function translateResourcePacksInfo(ResourcePacksInfoPacket $packet) : bool;

	public function translateResourcePackStack(ResourcePackStackPacket $packet) : bool;

	public function translateResourcePackClientResponse(ResourcePackClientResponsePacket $packet) : bool;

	public function translateText(TextPacket $packet) : bool;

	public function translateSetTime(SetTimePacket $packet) : bool;

	public function translateStartGame(StartGamePacket $packet) : bool;

	public function translateAddPlayer(AddPlayerPacket $packet) : bool;

	public function translateAddActor(AddActorPacket $packet) : bool;

	public function translateRemoveActor(RemoveActorPacket $packet) : bool;

	public function translateAddItemActor(AddItemActorPacket $packet) : bool;

	public function translateTakeItemActor(TakeItemActorPacket $packet) : bool;

	public function translateMoveActorAbsolute(MoveActorAbsolutePacket $packet) : bool;

	public function translateMovePlayer(MovePlayerPacket $packet) : bool;

	public function translatePassengerJump(PassengerJumpPacket $packet) : bool;

	public function translateUpdateBlock(UpdateBlockPacket $packet) : bool;

	public function translateAddPainting(AddPaintingPacket $packet) : bool;

	public function translateTickSync(TickSyncPacket $packet) : bool;

	public function translateLevelSoundEventPacketV1(LevelSoundEventPacketV1 $packet) : bool;

	public function translateLevelEvent(LevelEventPacket $packet) : bool;

	public function translateBlockEvent(BlockEventPacket $packet) : bool;

	public function translateActorEvent(ActorEventPacket $packet) : bool;

	public function translateMobEffect(MobEffectPacket $packet) : bool;

	public function translateUpdateAttributes(UpdateAttributesPacket $packet) : bool;

	public function translateInventoryTransaction(InventoryTransactionPacket $packet) : bool;

	public function translateMobEquipment(MobEquipmentPacket $packet) : bool;

	public function translateMobArmorEquipment(MobArmorEquipmentPacket $packet) : bool;

	public function translateInteract(InteractPacket $packet) : bool;

	public function translateBlockPickRequest(BlockPickRequestPacket $packet) : bool;

	public function translateActorPickRequest(ActorPickRequestPacket $packet) : bool;

	public function translatePlayerAction(PlayerActionPacket $packet) : bool;

	public function translateHurtArmor(HurtArmorPacket $packet) : bool;

	public function translateSetActorData(SetActorDataPacket $packet) : bool;

	public function translateSetActorMotion(SetActorMotionPacket $packet) : bool;

	public function translateSetActorLink(SetActorLinkPacket $packet) : bool;

	public function translateSetHealth(SetHealthPacket $packet) : bool;

	public function translateSetSpawnPosition(SetSpawnPositionPacket $packet) : bool;

	public function translateAnimate(AnimatePacket $packet) : bool;

	public function translateRespawn(RespawnPacket $packet) : bool;

	public function translateContainerOpen(ContainerOpenPacket $packet) : bool;

	public function translateContainerClose(ContainerClosePacket $packet) : bool;

	public function translatePlayerHotbar(PlayerHotbarPacket $packet) : bool;

	public function translateInventoryContent(InventoryContentPacket $packet) : bool;

	public function translateInventorySlot(InventorySlotPacket $packet) : bool;

	public function translateContainerSetData(ContainerSetDataPacket $packet) : bool;

	public function translateCraftingData(CraftingDataPacket $packet) : bool;

	public function translateGuiDataPickItem(GuiDataPickItemPacket $packet) : bool;

	public function translateBlockActorData(BlockActorDataPacket $packet) : bool;

	public function translatePlayerInput(PlayerInputPacket $packet) : bool;

	public function translateLevelChunk(LevelChunkPacket $packet) : bool;

	public function translateSetCommandsEnabled(SetCommandsEnabledPacket $packet) : bool;

	public function translateSetDifficulty(SetDifficultyPacket $packet) : bool;

	public function translateChangeDimension(ChangeDimensionPacket $packet) : bool;

	public function translateSetPlayerGameType(SetPlayerGameTypePacket $packet) : bool;

	public function translatePlayerList(PlayerListPacket $packet) : bool;

	public function translateSimpleEvent(SimpleEventPacket $packet) : bool;

	public function translateLegacyTelemetryEvent(LegacyTelemetryEventPacket $packet) : bool;

	public function translateSpawnExperienceOrb(SpawnExperienceOrbPacket $packet) : bool;

	public function translateClientboundMapItemData(ClientboundMapItemDataPacket $packet) : bool;

	public function translateMapInfoRequest(MapInfoRequestPacket $packet) : bool;

	public function translateRequestChunkRadius(RequestChunkRadiusPacket $packet) : bool;

	public function translateChunkRadiusUpdated(ChunkRadiusUpdatedPacket $packet) : bool;

	public function translateItemFrameDropItem(ItemFrameDropItemPacket $packet) : bool;

	public function translateGameRulesChanged(GameRulesChangedPacket $packet) : bool;

	public function translateCamera(CameraPacket $packet) : bool;

	public function translateBossEvent(BossEventPacket $packet) : bool;

	public function translateShowCredits(ShowCreditsPacket $packet) : bool;

	public function translateAvailableCommands(AvailableCommandsPacket $packet) : bool;

	public function translateCommandRequest(CommandRequestPacket $packet) : bool;

	public function translateCommandBlockUpdate(CommandBlockUpdatePacket $packet) : bool;

	public function translateCommandOutput(CommandOutputPacket $packet) : bool;

	public function translateUpdateTrade(UpdateTradePacket $packet) : bool;

	public function translateUpdateEquip(UpdateEquipPacket $packet) : bool;

	public function translateResourcePackDataInfo(ResourcePackDataInfoPacket $packet) : bool;

	public function translateResourcePackChunkData(ResourcePackChunkDataPacket $packet) : bool;

	public function translateResourcePackChunkRequest(ResourcePackChunkRequestPacket $packet) : bool;

	public function translateTransfer(TransferPacket $packet) : bool;

	public function translatePlaySound(PlaySoundPacket $packet) : bool;

	public function translateStopSound(StopSoundPacket $packet) : bool;

	public function translateSetTitle(SetTitlePacket $packet) : bool;

	public function translateAddBehaviorTree(AddBehaviorTreePacket $packet) : bool;

	public function translateStructureBlockUpdate(StructureBlockUpdatePacket $packet) : bool;

	public function translateShowStoreOffer(ShowStoreOfferPacket $packet) : bool;

	public function translatePurchaseReceipt(PurchaseReceiptPacket $packet) : bool;

	public function translatePlayerSkin(PlayerSkinPacket $packet) : bool;

	public function translateSubClientLogin(SubClientLoginPacket $packet) : bool;

	public function translateAutomationClientConnect(AutomationClientConnectPacket $packet) : bool;

	public function translateSetLastHurtBy(SetLastHurtByPacket $packet) : bool;

	public function translateBookEdit(BookEditPacket $packet) : bool;

	public function translateNpcRequest(NpcRequestPacket $packet) : bool;

	public function translatePhotoTransfer(PhotoTransferPacket $packet) : bool;

	public function translateModalFormRequest(ModalFormRequestPacket $packet) : bool;

	public function translateModalFormResponse(ModalFormResponsePacket $packet) : bool;

	public function translateServerSettingsRequest(ServerSettingsRequestPacket $packet) : bool;

	public function translateServerSettingsResponse(ServerSettingsResponsePacket $packet) : bool;

	public function translateShowProfile(ShowProfilePacket $packet) : bool;

	public function translateSetDefaultGameType(SetDefaultGameTypePacket $packet) : bool;

	public function translateRemoveObjective(RemoveObjectivePacket $packet) : bool;

	public function translateSetDisplayObjective(SetDisplayObjectivePacket $packet) : bool;

	public function translateSetScore(SetScorePacket $packet) : bool;

	public function translateLabTable(LabTablePacket $packet) : bool;

	public function translateUpdateBlockSynced(UpdateBlockSyncedPacket $packet) : bool;

	public function translateMoveActorDelta(MoveActorDeltaPacket $packet) : bool;

	public function translateSetScoreboardIdentity(SetScoreboardIdentityPacket $packet) : bool;

	public function translateSetLocalPlayerAsInitialized(SetLocalPlayerAsInitializedPacket $packet) : bool;

	public function translateUpdateSoftEnum(UpdateSoftEnumPacket $packet) : bool;

	public function translateNetworkStackLatency(NetworkStackLatencyPacket $packet) : bool;

	public function translateSpawnParticleEffect(SpawnParticleEffectPacket $packet) : bool;

	public function translateAvailableActorIdentifiers(AvailableActorIdentifiersPacket $packet) : bool;

	public function translateLevelSoundEventPacketV2(LevelSoundEventPacketV2 $packet) : bool;

	public function translateNetworkChunkPublisherUpdate(NetworkChunkPublisherUpdatePacket $packet) : bool;

	public function translateBiomeDefinitionList(BiomeDefinitionListPacket $packet) : bool;

	public function translateLevelSoundEvent(LevelSoundEventPacket $packet) : bool;

	public function translateLevelEventGeneric(LevelEventGenericPacket $packet) : bool;

	public function translateLecternUpdate(LecternUpdatePacket $packet) : bool;

	public function translateAddEntity(AddEntityPacket $packet) : bool;

	public function translateRemoveEntity(RemoveEntityPacket $packet) : bool;

	public function translateClientCacheStatus(ClientCacheStatusPacket $packet) : bool;

	public function translateOnScreenTextureAnimation(OnScreenTextureAnimationPacket $packet) : bool;

	public function translateMapCreateLockedCopy(MapCreateLockedCopyPacket $packet) : bool;

	public function translateStructureTemplateDataRequest(StructureTemplateDataRequestPacket $packet) : bool;

	public function translateStructureTemplateDataResponse(StructureTemplateDataResponsePacket $packet) : bool;

	public function translateClientCacheBlobStatus(ClientCacheBlobStatusPacket $packet) : bool;

	public function translateClientCacheMissResponse(ClientCacheMissResponsePacket $packet) : bool;

	public function translateEducationSettings(EducationSettingsPacket $packet) : bool;

	public function translateEmote(EmotePacket $packet) : bool;

	public function translateMultiplayerSettings(MultiplayerSettingsPacket $packet) : bool;

	public function translateSettingsCommand(SettingsCommandPacket $packet) : bool;

	public function translateAnvilDamage(AnvilDamagePacket $packet) : bool;

	public function translateCompletedUsingItem(CompletedUsingItemPacket $packet) : bool;

	public function translateNetworkSettings(NetworkSettingsPacket $packet) : bool;

	public function translatePlayerAuthInput(PlayerAuthInputPacket $packet) : bool;

	public function translateCreativeContent(CreativeContentPacket $packet) : bool;

	public function translatePlayerEnchantOptions(PlayerEnchantOptionsPacket $packet) : bool;

	public function translateItemStackRequest(ItemStackRequestPacket $packet) : bool;

	public function translateItemStackResponse(ItemStackResponsePacket $packet) : bool;

	public function translatePlayerArmorDamage(PlayerArmorDamagePacket $packet) : bool;

	public function translateCodeBuilder(CodeBuilderPacket $packet) : bool;

	public function translateUpdatePlayerGameType(UpdatePlayerGameTypePacket $packet) : bool;

	public function translateEmoteList(EmoteListPacket $packet) : bool;

	public function translatePositionTrackingDBServerBroadcast(PositionTrackingDBServerBroadcastPacket $packet) : bool;

	public function translatePositionTrackingDBClientRequest(PositionTrackingDBClientRequestPacket $packet) : bool;

	public function translateDebugInfo(DebugInfoPacket $packet) : bool;

	public function translatePacketViolationWarning(PacketViolationWarningPacket $packet) : bool;

	public function translateMotionPredictionHints(MotionPredictionHintsPacket $packet) : bool;

	public function translateAnimateEntity(AnimateEntityPacket $packet) : bool;

	public function translateCameraShake(CameraShakePacket $packet) : bool;

	public function translatePlayerFog(PlayerFogPacket $packet) : bool;

	public function translateCorrectPlayerMovePrediction(CorrectPlayerMovePredictionPacket $packet) : bool;

	public function translateItemComponent(ItemComponentPacket $packet) : bool;

	public function translateFilterText(FilterTextPacket $packet) : bool;

	public function translateClientboundDebugRenderer(ClientboundDebugRendererPacket $packet) : bool;

	public function translateSyncActorProperty(SyncActorPropertyPacket $packet) : bool;

	public function translateAddVolumeEntity(AddVolumeEntityPacket $packet) : bool;

	public function translateRemoveVolumeEntity(RemoveVolumeEntityPacket $packet) : bool;

	public function translateSimulationType(SimulationTypePacket $packet) : bool;

	public function translateNpcDialogue(NpcDialoguePacket $packet) : bool;

	public function translateEduUriResource(EduUriResourcePacket $packet) : bool;

	public function translateCreatePhoto(CreatePhotoPacket $packet) : bool;

	public function translateUpdateSubChunkBlocks(UpdateSubChunkBlocksPacket $packet) : bool;

	public function translateSubChunk(SubChunkPacket $packet) : bool;

	public function translateSubChunkRequest(SubChunkRequestPacket $packet) : bool;

	public function translatePlayerStartItemCooldown(PlayerStartItemCooldownPacket $packet) : bool;

	public function translateScriptMessage(ScriptMessagePacket $packet) : bool;

	public function translateCodeBuilderSource(CodeBuilderSourcePacket $packet) : bool;

	public function translateTickingAreasLoadStatus(TickingAreasLoadStatusPacket $packet) : bool;

	public function translateDimensionData(DimensionDataPacket $packet) : bool;

	public function translateAgentActionEvent(AgentActionEventPacket $packet) : bool;

	public function translateChangeMobProperty(ChangeMobPropertyPacket $packet) : bool;

	public function translateLessonProgress(LessonProgressPacket $packet) : bool;

	public function translateRequestAbility(RequestAbilityPacket $packet) : bool;

	public function translateRequestPermissions(RequestPermissionsPacket $packet) : bool;

	public function translateToastRequest(ToastRequestPacket $packet) : bool;

	public function translateUpdateAbilities(UpdateAbilitiesPacket $packet) : bool;

	public function translateUpdateAdventureSettings(UpdateAdventureSettingsPacket $packet) : bool;

	public function translateDeathInfo(DeathInfoPacket $packet) : bool;

	public function translateEditorNetwork(EditorNetworkPacket $packet) : bool;

	public function translateFeatureRegistry(FeatureRegistryPacket $packet) : bool;

	public function translateServerStats(ServerStatsPacket $packet) : bool;

	public function translateRequestNetworkSettings(RequestNetworkSettingsPacket $packet) : bool;

	public function translateGameTestRequest(GameTestRequestPacket $packet) : bool;

	public function translateGameTestResults(GameTestResultsPacket $packet) : bool;

	public function translateUpdateClientInputLocks(UpdateClientInputLocksPacket $packet) : bool;

	public function translateCameraPresets(CameraPresetsPacket $packet) : bool;

	public function translateUnlockedRecipes(UnlockedRecipesPacket $packet) : bool;

	public function translateCameraInstruction(CameraInstructionPacket $packet) : bool;

	public function translateCompressedBiomeDefinitionList(CompressedBiomeDefinitionListPacket $packet) : bool;

	public function translateTrimData(TrimDataPacket $packet) : bool;

	public function translateOpenSign(OpenSignPacket $packet) : bool;

	public function translateAgentAnimation(AgentAnimationPacket $packet) : bool;

	public function translateRefreshEntitlements(RefreshEntitlementsPacket $packet) : bool;

	public function translatePlayerToggleCrafterSlotRequest(PlayerToggleCrafterSlotRequestPacket $packet) : bool;

	public function translateSetPlayerInventoryOptions(SetPlayerInventoryOptionsPacket $packet) : bool;
}
