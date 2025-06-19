<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasicAwRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasicAwRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * awCode  awCode
    * awDescription  awDescription
    * awMark  awMark
    * awOperationid  awOperationid
    * awTags  awTags
    * awType  awType
    * awUniqueid  awUniqueid
    * byOrder  byOrder
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * createUserId  createUserId
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  description
    * dftCheckPointList  dftCheckPointList
    * dftCustomHeader  dftCustomHeader
    * dftRetryInterval  dftRetryInterval
    * dftRetryTimes  dftRetryTimes
    * dftVariableList  dftVariableList
    * extraInfo  extraInfo
    * groupName  groupName
    * hasCode  hasCode
    * id  id
    * importPackage  importPackage
    * interfaceLabel  interfaceLabel
    * isFavorite  isFavorite
    * method  method
    * name  name
    * nameView  nameView
    * originProject  originProject
    * paramTypeAndDftValue  paramTypeAndDftValue
    * projectId  projectId
    * protocolType  protocolType
    * publicAwLib  publicAwLib
    * publicAwLibId  publicAwLibId
    * region  region
    * returnType  returnType
    * rootId  rootId
    * source  source
    * specialType  specialType
    * tmssCaseNumber  tmssCaseNumber
    * tmssCaseId  tmssCaseId
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * warningMsg  warningMsg
    * yamlName  yamlName
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'awCode' => 'string',
            'awDescription' => 'string',
            'awMark' => 'int',
            'awOperationid' => 'string',
            'awTags' => 'string',
            'awType' => 'int',
            'awUniqueid' => 'string',
            'byOrder' => 'int',
            'createTime' => 'string',
            'createTimeStamp' => 'int',
            'createTimeString' => 'string',
            'createUser' => 'string',
            'createUserId' => 'string',
            'deleteTime' => 'string',
            'deleteUser' => 'string',
            'description' => 'string',
            'dftCheckPointList' => 'object[]',
            'dftCustomHeader' => 'object[]',
            'dftRetryInterval' => 'string',
            'dftRetryTimes' => 'string',
            'dftVariableList' => 'object[]',
            'extraInfo' => 'object',
            'groupName' => 'string',
            'hasCode' => 'int',
            'id' => 'string',
            'importPackage' => 'string[]',
            'interfaceLabel' => 'string',
            'isFavorite' => 'int',
            'method' => 'string',
            'name' => 'string',
            'nameView' => 'string',
            'originProject' => 'string',
            'paramTypeAndDftValue' => 'object[]',
            'projectId' => 'string',
            'protocolType' => 'string',
            'publicAwLib' => 'object',
            'publicAwLibId' => 'string',
            'region' => 'string',
            'returnType' => 'string',
            'rootId' => 'string',
            'source' => 'string',
            'specialType' => 'int',
            'tmssCaseNumber' => 'string',
            'tmssCaseId' => 'string',
            'updateTime' => 'string',
            'updateTimeStamp' => 'int',
            'updateTimeString' => 'string',
            'updateUser' => 'string',
            'warningMsg' => 'string',
            'yamlName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * awCode  awCode
    * awDescription  awDescription
    * awMark  awMark
    * awOperationid  awOperationid
    * awTags  awTags
    * awType  awType
    * awUniqueid  awUniqueid
    * byOrder  byOrder
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * createUserId  createUserId
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  description
    * dftCheckPointList  dftCheckPointList
    * dftCustomHeader  dftCustomHeader
    * dftRetryInterval  dftRetryInterval
    * dftRetryTimes  dftRetryTimes
    * dftVariableList  dftVariableList
    * extraInfo  extraInfo
    * groupName  groupName
    * hasCode  hasCode
    * id  id
    * importPackage  importPackage
    * interfaceLabel  interfaceLabel
    * isFavorite  isFavorite
    * method  method
    * name  name
    * nameView  nameView
    * originProject  originProject
    * paramTypeAndDftValue  paramTypeAndDftValue
    * projectId  projectId
    * protocolType  protocolType
    * publicAwLib  publicAwLib
    * publicAwLibId  publicAwLibId
    * region  region
    * returnType  returnType
    * rootId  rootId
    * source  source
    * specialType  specialType
    * tmssCaseNumber  tmssCaseNumber
    * tmssCaseId  tmssCaseId
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * warningMsg  warningMsg
    * yamlName  yamlName
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'awCode' => null,
        'awDescription' => null,
        'awMark' => 'int32',
        'awOperationid' => null,
        'awTags' => null,
        'awType' => 'int32',
        'awUniqueid' => null,
        'byOrder' => 'int32',
        'createTime' => null,
        'createTimeStamp' => 'int64',
        'createTimeString' => null,
        'createUser' => null,
        'createUserId' => null,
        'deleteTime' => null,
        'deleteUser' => null,
        'description' => null,
        'dftCheckPointList' => null,
        'dftCustomHeader' => null,
        'dftRetryInterval' => null,
        'dftRetryTimes' => null,
        'dftVariableList' => null,
        'extraInfo' => null,
        'groupName' => null,
        'hasCode' => 'int32',
        'id' => null,
        'importPackage' => null,
        'interfaceLabel' => null,
        'isFavorite' => 'int32',
        'method' => null,
        'name' => null,
        'nameView' => null,
        'originProject' => null,
        'paramTypeAndDftValue' => null,
        'projectId' => null,
        'protocolType' => null,
        'publicAwLib' => null,
        'publicAwLibId' => null,
        'region' => null,
        'returnType' => null,
        'rootId' => null,
        'source' => null,
        'specialType' => 'int32',
        'tmssCaseNumber' => null,
        'tmssCaseId' => null,
        'updateTime' => null,
        'updateTimeStamp' => 'int64',
        'updateTimeString' => null,
        'updateUser' => null,
        'warningMsg' => null,
        'yamlName' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * awCode  awCode
    * awDescription  awDescription
    * awMark  awMark
    * awOperationid  awOperationid
    * awTags  awTags
    * awType  awType
    * awUniqueid  awUniqueid
    * byOrder  byOrder
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * createUserId  createUserId
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  description
    * dftCheckPointList  dftCheckPointList
    * dftCustomHeader  dftCustomHeader
    * dftRetryInterval  dftRetryInterval
    * dftRetryTimes  dftRetryTimes
    * dftVariableList  dftVariableList
    * extraInfo  extraInfo
    * groupName  groupName
    * hasCode  hasCode
    * id  id
    * importPackage  importPackage
    * interfaceLabel  interfaceLabel
    * isFavorite  isFavorite
    * method  method
    * name  name
    * nameView  nameView
    * originProject  originProject
    * paramTypeAndDftValue  paramTypeAndDftValue
    * projectId  projectId
    * protocolType  protocolType
    * publicAwLib  publicAwLib
    * publicAwLibId  publicAwLibId
    * region  region
    * returnType  returnType
    * rootId  rootId
    * source  source
    * specialType  specialType
    * tmssCaseNumber  tmssCaseNumber
    * tmssCaseId  tmssCaseId
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * warningMsg  warningMsg
    * yamlName  yamlName
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'awCode' => 'aw_code',
            'awDescription' => 'aw_description',
            'awMark' => 'aw_mark',
            'awOperationid' => 'aw_operationid',
            'awTags' => 'aw_tags',
            'awType' => 'aw_type',
            'awUniqueid' => 'aw_uniqueid',
            'byOrder' => 'by_order',
            'createTime' => 'create_time',
            'createTimeStamp' => 'create_time_stamp',
            'createTimeString' => 'create_time_string',
            'createUser' => 'create_user',
            'createUserId' => 'create_user_id',
            'deleteTime' => 'delete_time',
            'deleteUser' => 'delete_user',
            'description' => 'description',
            'dftCheckPointList' => 'dft_check_point_list',
            'dftCustomHeader' => 'dft_custom_header',
            'dftRetryInterval' => 'dft_retry_interval',
            'dftRetryTimes' => 'dft_retry_times',
            'dftVariableList' => 'dft_variable_list',
            'extraInfo' => 'extra_info',
            'groupName' => 'group_name',
            'hasCode' => 'has_code',
            'id' => 'id',
            'importPackage' => 'import_package',
            'interfaceLabel' => 'interface_label',
            'isFavorite' => 'is_favorite',
            'method' => 'method',
            'name' => 'name',
            'nameView' => 'nameView',
            'originProject' => 'origin_project',
            'paramTypeAndDftValue' => 'param_type_and_dft_value',
            'projectId' => 'project_id',
            'protocolType' => 'protocol_type',
            'publicAwLib' => 'public_aw_lib',
            'publicAwLibId' => 'public_aw_lib_id',
            'region' => 'region',
            'returnType' => 'return_type',
            'rootId' => 'root_id',
            'source' => 'source',
            'specialType' => 'special_type',
            'tmssCaseNumber' => 'tmssCaseNumber',
            'tmssCaseId' => 'tmss_case_id',
            'updateTime' => 'update_time',
            'updateTimeStamp' => 'update_time_stamp',
            'updateTimeString' => 'update_time_string',
            'updateUser' => 'update_user',
            'warningMsg' => 'warningMsg',
            'yamlName' => 'yamlName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * awCode  awCode
    * awDescription  awDescription
    * awMark  awMark
    * awOperationid  awOperationid
    * awTags  awTags
    * awType  awType
    * awUniqueid  awUniqueid
    * byOrder  byOrder
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * createUserId  createUserId
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  description
    * dftCheckPointList  dftCheckPointList
    * dftCustomHeader  dftCustomHeader
    * dftRetryInterval  dftRetryInterval
    * dftRetryTimes  dftRetryTimes
    * dftVariableList  dftVariableList
    * extraInfo  extraInfo
    * groupName  groupName
    * hasCode  hasCode
    * id  id
    * importPackage  importPackage
    * interfaceLabel  interfaceLabel
    * isFavorite  isFavorite
    * method  method
    * name  name
    * nameView  nameView
    * originProject  originProject
    * paramTypeAndDftValue  paramTypeAndDftValue
    * projectId  projectId
    * protocolType  protocolType
    * publicAwLib  publicAwLib
    * publicAwLibId  publicAwLibId
    * region  region
    * returnType  returnType
    * rootId  rootId
    * source  source
    * specialType  specialType
    * tmssCaseNumber  tmssCaseNumber
    * tmssCaseId  tmssCaseId
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * warningMsg  warningMsg
    * yamlName  yamlName
    *
    * @var string[]
    */
    protected static $setters = [
            'awCode' => 'setAwCode',
            'awDescription' => 'setAwDescription',
            'awMark' => 'setAwMark',
            'awOperationid' => 'setAwOperationid',
            'awTags' => 'setAwTags',
            'awType' => 'setAwType',
            'awUniqueid' => 'setAwUniqueid',
            'byOrder' => 'setByOrder',
            'createTime' => 'setCreateTime',
            'createTimeStamp' => 'setCreateTimeStamp',
            'createTimeString' => 'setCreateTimeString',
            'createUser' => 'setCreateUser',
            'createUserId' => 'setCreateUserId',
            'deleteTime' => 'setDeleteTime',
            'deleteUser' => 'setDeleteUser',
            'description' => 'setDescription',
            'dftCheckPointList' => 'setDftCheckPointList',
            'dftCustomHeader' => 'setDftCustomHeader',
            'dftRetryInterval' => 'setDftRetryInterval',
            'dftRetryTimes' => 'setDftRetryTimes',
            'dftVariableList' => 'setDftVariableList',
            'extraInfo' => 'setExtraInfo',
            'groupName' => 'setGroupName',
            'hasCode' => 'setHasCode',
            'id' => 'setId',
            'importPackage' => 'setImportPackage',
            'interfaceLabel' => 'setInterfaceLabel',
            'isFavorite' => 'setIsFavorite',
            'method' => 'setMethod',
            'name' => 'setName',
            'nameView' => 'setNameView',
            'originProject' => 'setOriginProject',
            'paramTypeAndDftValue' => 'setParamTypeAndDftValue',
            'projectId' => 'setProjectId',
            'protocolType' => 'setProtocolType',
            'publicAwLib' => 'setPublicAwLib',
            'publicAwLibId' => 'setPublicAwLibId',
            'region' => 'setRegion',
            'returnType' => 'setReturnType',
            'rootId' => 'setRootId',
            'source' => 'setSource',
            'specialType' => 'setSpecialType',
            'tmssCaseNumber' => 'setTmssCaseNumber',
            'tmssCaseId' => 'setTmssCaseId',
            'updateTime' => 'setUpdateTime',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'updateTimeString' => 'setUpdateTimeString',
            'updateUser' => 'setUpdateUser',
            'warningMsg' => 'setWarningMsg',
            'yamlName' => 'setYamlName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * awCode  awCode
    * awDescription  awDescription
    * awMark  awMark
    * awOperationid  awOperationid
    * awTags  awTags
    * awType  awType
    * awUniqueid  awUniqueid
    * byOrder  byOrder
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * createUserId  createUserId
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  description
    * dftCheckPointList  dftCheckPointList
    * dftCustomHeader  dftCustomHeader
    * dftRetryInterval  dftRetryInterval
    * dftRetryTimes  dftRetryTimes
    * dftVariableList  dftVariableList
    * extraInfo  extraInfo
    * groupName  groupName
    * hasCode  hasCode
    * id  id
    * importPackage  importPackage
    * interfaceLabel  interfaceLabel
    * isFavorite  isFavorite
    * method  method
    * name  name
    * nameView  nameView
    * originProject  originProject
    * paramTypeAndDftValue  paramTypeAndDftValue
    * projectId  projectId
    * protocolType  protocolType
    * publicAwLib  publicAwLib
    * publicAwLibId  publicAwLibId
    * region  region
    * returnType  returnType
    * rootId  rootId
    * source  source
    * specialType  specialType
    * tmssCaseNumber  tmssCaseNumber
    * tmssCaseId  tmssCaseId
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * warningMsg  warningMsg
    * yamlName  yamlName
    *
    * @var string[]
    */
    protected static $getters = [
            'awCode' => 'getAwCode',
            'awDescription' => 'getAwDescription',
            'awMark' => 'getAwMark',
            'awOperationid' => 'getAwOperationid',
            'awTags' => 'getAwTags',
            'awType' => 'getAwType',
            'awUniqueid' => 'getAwUniqueid',
            'byOrder' => 'getByOrder',
            'createTime' => 'getCreateTime',
            'createTimeStamp' => 'getCreateTimeStamp',
            'createTimeString' => 'getCreateTimeString',
            'createUser' => 'getCreateUser',
            'createUserId' => 'getCreateUserId',
            'deleteTime' => 'getDeleteTime',
            'deleteUser' => 'getDeleteUser',
            'description' => 'getDescription',
            'dftCheckPointList' => 'getDftCheckPointList',
            'dftCustomHeader' => 'getDftCustomHeader',
            'dftRetryInterval' => 'getDftRetryInterval',
            'dftRetryTimes' => 'getDftRetryTimes',
            'dftVariableList' => 'getDftVariableList',
            'extraInfo' => 'getExtraInfo',
            'groupName' => 'getGroupName',
            'hasCode' => 'getHasCode',
            'id' => 'getId',
            'importPackage' => 'getImportPackage',
            'interfaceLabel' => 'getInterfaceLabel',
            'isFavorite' => 'getIsFavorite',
            'method' => 'getMethod',
            'name' => 'getName',
            'nameView' => 'getNameView',
            'originProject' => 'getOriginProject',
            'paramTypeAndDftValue' => 'getParamTypeAndDftValue',
            'projectId' => 'getProjectId',
            'protocolType' => 'getProtocolType',
            'publicAwLib' => 'getPublicAwLib',
            'publicAwLibId' => 'getPublicAwLibId',
            'region' => 'getRegion',
            'returnType' => 'getReturnType',
            'rootId' => 'getRootId',
            'source' => 'getSource',
            'specialType' => 'getSpecialType',
            'tmssCaseNumber' => 'getTmssCaseNumber',
            'tmssCaseId' => 'getTmssCaseId',
            'updateTime' => 'getUpdateTime',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'updateTimeString' => 'getUpdateTimeString',
            'updateUser' => 'getUpdateUser',
            'warningMsg' => 'getWarningMsg',
            'yamlName' => 'getYamlName'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['awCode'] = isset($data['awCode']) ? $data['awCode'] : null;
        $this->container['awDescription'] = isset($data['awDescription']) ? $data['awDescription'] : null;
        $this->container['awMark'] = isset($data['awMark']) ? $data['awMark'] : null;
        $this->container['awOperationid'] = isset($data['awOperationid']) ? $data['awOperationid'] : null;
        $this->container['awTags'] = isset($data['awTags']) ? $data['awTags'] : null;
        $this->container['awType'] = isset($data['awType']) ? $data['awType'] : null;
        $this->container['awUniqueid'] = isset($data['awUniqueid']) ? $data['awUniqueid'] : null;
        $this->container['byOrder'] = isset($data['byOrder']) ? $data['byOrder'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['createTimeString'] = isset($data['createTimeString']) ? $data['createTimeString'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['deleteUser'] = isset($data['deleteUser']) ? $data['deleteUser'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dftCheckPointList'] = isset($data['dftCheckPointList']) ? $data['dftCheckPointList'] : null;
        $this->container['dftCustomHeader'] = isset($data['dftCustomHeader']) ? $data['dftCustomHeader'] : null;
        $this->container['dftRetryInterval'] = isset($data['dftRetryInterval']) ? $data['dftRetryInterval'] : null;
        $this->container['dftRetryTimes'] = isset($data['dftRetryTimes']) ? $data['dftRetryTimes'] : null;
        $this->container['dftVariableList'] = isset($data['dftVariableList']) ? $data['dftVariableList'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['hasCode'] = isset($data['hasCode']) ? $data['hasCode'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['importPackage'] = isset($data['importPackage']) ? $data['importPackage'] : null;
        $this->container['interfaceLabel'] = isset($data['interfaceLabel']) ? $data['interfaceLabel'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameView'] = isset($data['nameView']) ? $data['nameView'] : null;
        $this->container['originProject'] = isset($data['originProject']) ? $data['originProject'] : null;
        $this->container['paramTypeAndDftValue'] = isset($data['paramTypeAndDftValue']) ? $data['paramTypeAndDftValue'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['publicAwLib'] = isset($data['publicAwLib']) ? $data['publicAwLib'] : null;
        $this->container['publicAwLibId'] = isset($data['publicAwLibId']) ? $data['publicAwLibId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['returnType'] = isset($data['returnType']) ? $data['returnType'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['specialType'] = isset($data['specialType']) ? $data['specialType'] : null;
        $this->container['tmssCaseNumber'] = isset($data['tmssCaseNumber']) ? $data['tmssCaseNumber'] : null;
        $this->container['tmssCaseId'] = isset($data['tmssCaseId']) ? $data['tmssCaseId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['updateTimeString'] = isset($data['updateTimeString']) ? $data['updateTimeString'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['warningMsg'] = isset($data['warningMsg']) ? $data['warningMsg'] : null;
        $this->container['yamlName'] = isset($data['yamlName']) ? $data['yamlName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets awCode
    *  awCode
    *
    * @return string|null
    */
    public function getAwCode()
    {
        return $this->container['awCode'];
    }

    /**
    * Sets awCode
    *
    * @param string|null $awCode awCode
    *
    * @return $this
    */
    public function setAwCode($awCode)
    {
        $this->container['awCode'] = $awCode;
        return $this;
    }

    /**
    * Gets awDescription
    *  awDescription
    *
    * @return string|null
    */
    public function getAwDescription()
    {
        return $this->container['awDescription'];
    }

    /**
    * Sets awDescription
    *
    * @param string|null $awDescription awDescription
    *
    * @return $this
    */
    public function setAwDescription($awDescription)
    {
        $this->container['awDescription'] = $awDescription;
        return $this;
    }

    /**
    * Gets awMark
    *  awMark
    *
    * @return int|null
    */
    public function getAwMark()
    {
        return $this->container['awMark'];
    }

    /**
    * Sets awMark
    *
    * @param int|null $awMark awMark
    *
    * @return $this
    */
    public function setAwMark($awMark)
    {
        $this->container['awMark'] = $awMark;
        return $this;
    }

    /**
    * Gets awOperationid
    *  awOperationid
    *
    * @return string|null
    */
    public function getAwOperationid()
    {
        return $this->container['awOperationid'];
    }

    /**
    * Sets awOperationid
    *
    * @param string|null $awOperationid awOperationid
    *
    * @return $this
    */
    public function setAwOperationid($awOperationid)
    {
        $this->container['awOperationid'] = $awOperationid;
        return $this;
    }

    /**
    * Gets awTags
    *  awTags
    *
    * @return string|null
    */
    public function getAwTags()
    {
        return $this->container['awTags'];
    }

    /**
    * Sets awTags
    *
    * @param string|null $awTags awTags
    *
    * @return $this
    */
    public function setAwTags($awTags)
    {
        $this->container['awTags'] = $awTags;
        return $this;
    }

    /**
    * Gets awType
    *  awType
    *
    * @return int|null
    */
    public function getAwType()
    {
        return $this->container['awType'];
    }

    /**
    * Sets awType
    *
    * @param int|null $awType awType
    *
    * @return $this
    */
    public function setAwType($awType)
    {
        $this->container['awType'] = $awType;
        return $this;
    }

    /**
    * Gets awUniqueid
    *  awUniqueid
    *
    * @return string|null
    */
    public function getAwUniqueid()
    {
        return $this->container['awUniqueid'];
    }

    /**
    * Sets awUniqueid
    *
    * @param string|null $awUniqueid awUniqueid
    *
    * @return $this
    */
    public function setAwUniqueid($awUniqueid)
    {
        $this->container['awUniqueid'] = $awUniqueid;
        return $this;
    }

    /**
    * Gets byOrder
    *  byOrder
    *
    * @return int|null
    */
    public function getByOrder()
    {
        return $this->container['byOrder'];
    }

    /**
    * Sets byOrder
    *
    * @param int|null $byOrder byOrder
    *
    * @return $this
    */
    public function setByOrder($byOrder)
    {
        $this->container['byOrder'] = $byOrder;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  createTimeStamp
    *
    * @return int|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param int|null $createTimeStamp createTimeStamp
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets createTimeString
    *  createTimeString
    *
    * @return string|null
    */
    public function getCreateTimeString()
    {
        return $this->container['createTimeString'];
    }

    /**
    * Sets createTimeString
    *
    * @param string|null $createTimeString createTimeString
    *
    * @return $this
    */
    public function setCreateTimeString($createTimeString)
    {
        $this->container['createTimeString'] = $createTimeString;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createUserId
    *  createUserId
    *
    * @return string|null
    */
    public function getCreateUserId()
    {
        return $this->container['createUserId'];
    }

    /**
    * Sets createUserId
    *
    * @param string|null $createUserId createUserId
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets deleteTime
    *  更新时间
    *
    * @return string|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param string|null $deleteTime 更新时间
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets deleteUser
    *  删除人
    *
    * @return string|null
    */
    public function getDeleteUser()
    {
        return $this->container['deleteUser'];
    }

    /**
    * Sets deleteUser
    *
    * @param string|null $deleteUser 删除人
    *
    * @return $this
    */
    public function setDeleteUser($deleteUser)
    {
        $this->container['deleteUser'] = $deleteUser;
        return $this;
    }

    /**
    * Gets description
    *  description
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description description
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dftCheckPointList
    *  dftCheckPointList
    *
    * @return object[]|null
    */
    public function getDftCheckPointList()
    {
        return $this->container['dftCheckPointList'];
    }

    /**
    * Sets dftCheckPointList
    *
    * @param object[]|null $dftCheckPointList dftCheckPointList
    *
    * @return $this
    */
    public function setDftCheckPointList($dftCheckPointList)
    {
        $this->container['dftCheckPointList'] = $dftCheckPointList;
        return $this;
    }

    /**
    * Gets dftCustomHeader
    *  dftCustomHeader
    *
    * @return object[]|null
    */
    public function getDftCustomHeader()
    {
        return $this->container['dftCustomHeader'];
    }

    /**
    * Sets dftCustomHeader
    *
    * @param object[]|null $dftCustomHeader dftCustomHeader
    *
    * @return $this
    */
    public function setDftCustomHeader($dftCustomHeader)
    {
        $this->container['dftCustomHeader'] = $dftCustomHeader;
        return $this;
    }

    /**
    * Gets dftRetryInterval
    *  dftRetryInterval
    *
    * @return string|null
    */
    public function getDftRetryInterval()
    {
        return $this->container['dftRetryInterval'];
    }

    /**
    * Sets dftRetryInterval
    *
    * @param string|null $dftRetryInterval dftRetryInterval
    *
    * @return $this
    */
    public function setDftRetryInterval($dftRetryInterval)
    {
        $this->container['dftRetryInterval'] = $dftRetryInterval;
        return $this;
    }

    /**
    * Gets dftRetryTimes
    *  dftRetryTimes
    *
    * @return string|null
    */
    public function getDftRetryTimes()
    {
        return $this->container['dftRetryTimes'];
    }

    /**
    * Sets dftRetryTimes
    *
    * @param string|null $dftRetryTimes dftRetryTimes
    *
    * @return $this
    */
    public function setDftRetryTimes($dftRetryTimes)
    {
        $this->container['dftRetryTimes'] = $dftRetryTimes;
        return $this;
    }

    /**
    * Gets dftVariableList
    *  dftVariableList
    *
    * @return object[]|null
    */
    public function getDftVariableList()
    {
        return $this->container['dftVariableList'];
    }

    /**
    * Sets dftVariableList
    *
    * @param object[]|null $dftVariableList dftVariableList
    *
    * @return $this
    */
    public function setDftVariableList($dftVariableList)
    {
        $this->container['dftVariableList'] = $dftVariableList;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return object|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param object|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets groupName
    *  groupName
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName groupName
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets hasCode
    *  hasCode
    *
    * @return int|null
    */
    public function getHasCode()
    {
        return $this->container['hasCode'];
    }

    /**
    * Sets hasCode
    *
    * @param int|null $hasCode hasCode
    *
    * @return $this
    */
    public function setHasCode($hasCode)
    {
        $this->container['hasCode'] = $hasCode;
        return $this;
    }

    /**
    * Gets id
    *  id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets importPackage
    *  importPackage
    *
    * @return string[]|null
    */
    public function getImportPackage()
    {
        return $this->container['importPackage'];
    }

    /**
    * Sets importPackage
    *
    * @param string[]|null $importPackage importPackage
    *
    * @return $this
    */
    public function setImportPackage($importPackage)
    {
        $this->container['importPackage'] = $importPackage;
        return $this;
    }

    /**
    * Gets interfaceLabel
    *  interfaceLabel
    *
    * @return string|null
    */
    public function getInterfaceLabel()
    {
        return $this->container['interfaceLabel'];
    }

    /**
    * Sets interfaceLabel
    *
    * @param string|null $interfaceLabel interfaceLabel
    *
    * @return $this
    */
    public function setInterfaceLabel($interfaceLabel)
    {
        $this->container['interfaceLabel'] = $interfaceLabel;
        return $this;
    }

    /**
    * Gets isFavorite
    *  isFavorite
    *
    * @return int|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param int|null $isFavorite isFavorite
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets method
    *  method
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method method
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets name
    *  name
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameView
    *  nameView
    *
    * @return string|null
    */
    public function getNameView()
    {
        return $this->container['nameView'];
    }

    /**
    * Sets nameView
    *
    * @param string|null $nameView nameView
    *
    * @return $this
    */
    public function setNameView($nameView)
    {
        $this->container['nameView'] = $nameView;
        return $this;
    }

    /**
    * Gets originProject
    *  originProject
    *
    * @return string|null
    */
    public function getOriginProject()
    {
        return $this->container['originProject'];
    }

    /**
    * Sets originProject
    *
    * @param string|null $originProject originProject
    *
    * @return $this
    */
    public function setOriginProject($originProject)
    {
        $this->container['originProject'] = $originProject;
        return $this;
    }

    /**
    * Gets paramTypeAndDftValue
    *  paramTypeAndDftValue
    *
    * @return object[]|null
    */
    public function getParamTypeAndDftValue()
    {
        return $this->container['paramTypeAndDftValue'];
    }

    /**
    * Sets paramTypeAndDftValue
    *
    * @param object[]|null $paramTypeAndDftValue paramTypeAndDftValue
    *
    * @return $this
    */
    public function setParamTypeAndDftValue($paramTypeAndDftValue)
    {
        $this->container['paramTypeAndDftValue'] = $paramTypeAndDftValue;
        return $this;
    }

    /**
    * Gets projectId
    *  projectId
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId projectId
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets protocolType
    *  protocolType
    *
    * @return string|null
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param string|null $protocolType protocolType
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
        return $this;
    }

    /**
    * Gets publicAwLib
    *  publicAwLib
    *
    * @return object|null
    */
    public function getPublicAwLib()
    {
        return $this->container['publicAwLib'];
    }

    /**
    * Sets publicAwLib
    *
    * @param object|null $publicAwLib publicAwLib
    *
    * @return $this
    */
    public function setPublicAwLib($publicAwLib)
    {
        $this->container['publicAwLib'] = $publicAwLib;
        return $this;
    }

    /**
    * Gets publicAwLibId
    *  publicAwLibId
    *
    * @return string|null
    */
    public function getPublicAwLibId()
    {
        return $this->container['publicAwLibId'];
    }

    /**
    * Sets publicAwLibId
    *
    * @param string|null $publicAwLibId publicAwLibId
    *
    * @return $this
    */
    public function setPublicAwLibId($publicAwLibId)
    {
        $this->container['publicAwLibId'] = $publicAwLibId;
        return $this;
    }

    /**
    * Gets region
    *  region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets returnType
    *  returnType
    *
    * @return string|null
    */
    public function getReturnType()
    {
        return $this->container['returnType'];
    }

    /**
    * Sets returnType
    *
    * @param string|null $returnType returnType
    *
    * @return $this
    */
    public function setReturnType($returnType)
    {
        $this->container['returnType'] = $returnType;
        return $this;
    }

    /**
    * Gets rootId
    *  rootId
    *
    * @return string|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string|null $rootId rootId
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets specialType
    *  specialType
    *
    * @return int|null
    */
    public function getSpecialType()
    {
        return $this->container['specialType'];
    }

    /**
    * Sets specialType
    *
    * @param int|null $specialType specialType
    *
    * @return $this
    */
    public function setSpecialType($specialType)
    {
        $this->container['specialType'] = $specialType;
        return $this;
    }

    /**
    * Gets tmssCaseNumber
    *  tmssCaseNumber
    *
    * @return string|null
    */
    public function getTmssCaseNumber()
    {
        return $this->container['tmssCaseNumber'];
    }

    /**
    * Sets tmssCaseNumber
    *
    * @param string|null $tmssCaseNumber tmssCaseNumber
    *
    * @return $this
    */
    public function setTmssCaseNumber($tmssCaseNumber)
    {
        $this->container['tmssCaseNumber'] = $tmssCaseNumber;
        return $this;
    }

    /**
    * Gets tmssCaseId
    *  tmssCaseId
    *
    * @return string|null
    */
    public function getTmssCaseId()
    {
        return $this->container['tmssCaseId'];
    }

    /**
    * Sets tmssCaseId
    *
    * @param string|null $tmssCaseId tmssCaseId
    *
    * @return $this
    */
    public function setTmssCaseId($tmssCaseId)
    {
        $this->container['tmssCaseId'] = $tmssCaseId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeStamp
    *  updateTimeStamp
    *
    * @return int|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param int|null $updateTimeStamp updateTimeStamp
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeString
    *  updateTimeString
    *
    * @return string|null
    */
    public function getUpdateTimeString()
    {
        return $this->container['updateTimeString'];
    }

    /**
    * Sets updateTimeString
    *
    * @param string|null $updateTimeString updateTimeString
    *
    * @return $this
    */
    public function setUpdateTimeString($updateTimeString)
    {
        $this->container['updateTimeString'] = $updateTimeString;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新人
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新人
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets warningMsg
    *  warningMsg
    *
    * @return string|null
    */
    public function getWarningMsg()
    {
        return $this->container['warningMsg'];
    }

    /**
    * Sets warningMsg
    *
    * @param string|null $warningMsg warningMsg
    *
    * @return $this
    */
    public function setWarningMsg($warningMsg)
    {
        $this->container['warningMsg'] = $warningMsg;
        return $this;
    }

    /**
    * Gets yamlName
    *  yamlName
    *
    * @return string|null
    */
    public function getYamlName()
    {
        return $this->container['yamlName'];
    }

    /**
    * Sets yamlName
    *
    * @param string|null $yamlName yamlName
    *
    * @return $this
    */
    public function setYamlName($yamlName)
    {
        $this->container['yamlName'] = $yamlName;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

