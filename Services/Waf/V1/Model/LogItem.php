<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  日志唯一标识
    * timestamp  检测时间（毫秒时间戳）
    * requestId  请求ID
    * regionId  区域ID
    * engineId  引擎ID
    * appId  APP ID
    * appName  APP名称
    * tenantId  租户ID
    * projectId  项目ID
    * detectType  检测类型
    * detectContent  检测内容原文
    * history  多轮对话历史上下文，与检测内容原文一一对应
    * attackTypes  检测分类
    * suggestion  执行动作
    * customResp  安全代答
    * hitDetails  检测命中详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'timestamp' => 'int',
            'requestId' => 'string',
            'regionId' => 'string',
            'engineId' => 'string',
            'appId' => 'string',
            'appName' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'detectType' => 'string',
            'detectContent' => 'string',
            'history' => '\HuaweiCloud\SDK\Waf\V1\Model\HistoryItem[]',
            'attackTypes' => 'string[]',
            'suggestion' => 'string',
            'customResp' => 'string',
            'hitDetails' => '\HuaweiCloud\SDK\Waf\V1\Model\HitDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志唯一标识
    * timestamp  检测时间（毫秒时间戳）
    * requestId  请求ID
    * regionId  区域ID
    * engineId  引擎ID
    * appId  APP ID
    * appName  APP名称
    * tenantId  租户ID
    * projectId  项目ID
    * detectType  检测类型
    * detectContent  检测内容原文
    * history  多轮对话历史上下文，与检测内容原文一一对应
    * attackTypes  检测分类
    * suggestion  执行动作
    * customResp  安全代答
    * hitDetails  检测命中详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'timestamp' => 'int64',
        'requestId' => null,
        'regionId' => null,
        'engineId' => null,
        'appId' => null,
        'appName' => null,
        'tenantId' => null,
        'projectId' => null,
        'detectType' => null,
        'detectContent' => null,
        'history' => null,
        'attackTypes' => null,
        'suggestion' => null,
        'customResp' => null,
        'hitDetails' => null
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
    * id  日志唯一标识
    * timestamp  检测时间（毫秒时间戳）
    * requestId  请求ID
    * regionId  区域ID
    * engineId  引擎ID
    * appId  APP ID
    * appName  APP名称
    * tenantId  租户ID
    * projectId  项目ID
    * detectType  检测类型
    * detectContent  检测内容原文
    * history  多轮对话历史上下文，与检测内容原文一一对应
    * attackTypes  检测分类
    * suggestion  执行动作
    * customResp  安全代答
    * hitDetails  检测命中详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'timestamp' => 'timestamp',
            'requestId' => 'request_id',
            'regionId' => 'region_id',
            'engineId' => 'engine_id',
            'appId' => 'app_id',
            'appName' => 'app_name',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'detectType' => 'detect_type',
            'detectContent' => 'detect_content',
            'history' => 'history',
            'attackTypes' => 'attack_types',
            'suggestion' => 'suggestion',
            'customResp' => 'custom_resp',
            'hitDetails' => 'hit_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志唯一标识
    * timestamp  检测时间（毫秒时间戳）
    * requestId  请求ID
    * regionId  区域ID
    * engineId  引擎ID
    * appId  APP ID
    * appName  APP名称
    * tenantId  租户ID
    * projectId  项目ID
    * detectType  检测类型
    * detectContent  检测内容原文
    * history  多轮对话历史上下文，与检测内容原文一一对应
    * attackTypes  检测分类
    * suggestion  执行动作
    * customResp  安全代答
    * hitDetails  检测命中详情
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'timestamp' => 'setTimestamp',
            'requestId' => 'setRequestId',
            'regionId' => 'setRegionId',
            'engineId' => 'setEngineId',
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'detectType' => 'setDetectType',
            'detectContent' => 'setDetectContent',
            'history' => 'setHistory',
            'attackTypes' => 'setAttackTypes',
            'suggestion' => 'setSuggestion',
            'customResp' => 'setCustomResp',
            'hitDetails' => 'setHitDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志唯一标识
    * timestamp  检测时间（毫秒时间戳）
    * requestId  请求ID
    * regionId  区域ID
    * engineId  引擎ID
    * appId  APP ID
    * appName  APP名称
    * tenantId  租户ID
    * projectId  项目ID
    * detectType  检测类型
    * detectContent  检测内容原文
    * history  多轮对话历史上下文，与检测内容原文一一对应
    * attackTypes  检测分类
    * suggestion  执行动作
    * customResp  安全代答
    * hitDetails  检测命中详情
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'timestamp' => 'getTimestamp',
            'requestId' => 'getRequestId',
            'regionId' => 'getRegionId',
            'engineId' => 'getEngineId',
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
            'detectType' => 'getDetectType',
            'detectContent' => 'getDetectContent',
            'history' => 'getHistory',
            'attackTypes' => 'getAttackTypes',
            'suggestion' => 'getSuggestion',
            'customResp' => 'getCustomResp',
            'hitDetails' => 'getHitDetails'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['detectType'] = isset($data['detectType']) ? $data['detectType'] : null;
        $this->container['detectContent'] = isset($data['detectContent']) ? $data['detectContent'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
        $this->container['attackTypes'] = isset($data['attackTypes']) ? $data['attackTypes'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['customResp'] = isset($data['customResp']) ? $data['customResp'] : null;
        $this->container['hitDetails'] = isset($data['hitDetails']) ? $data['hitDetails'] : null;
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
    * Gets id
    *  日志唯一标识
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
    * @param string|null $id 日志唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets timestamp
    *  检测时间（毫秒时间戳）
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 检测时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets engineId
    *  引擎ID
    *
    * @return string|null
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string|null $engineId 引擎ID
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets appId
    *  APP ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId APP ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  APP名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName APP名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets detectType
    *  检测类型
    *
    * @return string|null
    */
    public function getDetectType()
    {
        return $this->container['detectType'];
    }

    /**
    * Sets detectType
    *
    * @param string|null $detectType 检测类型
    *
    * @return $this
    */
    public function setDetectType($detectType)
    {
        $this->container['detectType'] = $detectType;
        return $this;
    }

    /**
    * Gets detectContent
    *  检测内容原文
    *
    * @return string|null
    */
    public function getDetectContent()
    {
        return $this->container['detectContent'];
    }

    /**
    * Sets detectContent
    *
    * @param string|null $detectContent 检测内容原文
    *
    * @return $this
    */
    public function setDetectContent($detectContent)
    {
        $this->container['detectContent'] = $detectContent;
        return $this;
    }

    /**
    * Gets history
    *  多轮对话历史上下文，与检测内容原文一一对应
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\HistoryItem[]|null
    */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
    * Sets history
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\HistoryItem[]|null $history 多轮对话历史上下文，与检测内容原文一一对应
    *
    * @return $this
    */
    public function setHistory($history)
    {
        $this->container['history'] = $history;
        return $this;
    }

    /**
    * Gets attackTypes
    *  检测分类
    *
    * @return string[]|null
    */
    public function getAttackTypes()
    {
        return $this->container['attackTypes'];
    }

    /**
    * Sets attackTypes
    *
    * @param string[]|null $attackTypes 检测分类
    *
    * @return $this
    */
    public function setAttackTypes($attackTypes)
    {
        $this->container['attackTypes'] = $attackTypes;
        return $this;
    }

    /**
    * Gets suggestion
    *  执行动作
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 执行动作
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets customResp
    *  安全代答
    *
    * @return string|null
    */
    public function getCustomResp()
    {
        return $this->container['customResp'];
    }

    /**
    * Sets customResp
    *
    * @param string|null $customResp 安全代答
    *
    * @return $this
    */
    public function setCustomResp($customResp)
    {
        $this->container['customResp'] = $customResp;
        return $this;
    }

    /**
    * Gets hitDetails
    *  检测命中详情
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\HitDetail[]|null
    */
    public function getHitDetails()
    {
        return $this->container['hitDetails'];
    }

    /**
    * Sets hitDetails
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\HitDetail[]|null $hitDetails 检测命中详情
    *
    * @return $this
    */
    public function setHitDetails($hitDetails)
    {
        $this->container['hitDetails'] = $hitDetails;
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

