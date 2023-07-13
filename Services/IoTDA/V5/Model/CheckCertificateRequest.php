<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckCertificateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckCertificateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * spAuthToken  Sp用户Token。通过调用IoBPS服务获取SP用户Token
    * stageAuthToken  Stage用户的Token, 仅提供给IoStage服务使用
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * certificateId  设备CA证书ID，在上传设备CA证书时由平台分配的唯一标识。
    * actionId  对证书执行的操作，当前仅支持verify:校验证书
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'spAuthToken' => 'string',
            'stageAuthToken' => 'string',
            'instanceId' => 'string',
            'certificateId' => 'string',
            'actionId' => 'string',
            'body' => '\HuaweiCloud\SDK\IoTDA\V5\Model\VerifyCertificateDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * spAuthToken  Sp用户Token。通过调用IoBPS服务获取SP用户Token
    * stageAuthToken  Stage用户的Token, 仅提供给IoStage服务使用
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * certificateId  设备CA证书ID，在上传设备CA证书时由平台分配的唯一标识。
    * actionId  对证书执行的操作，当前仅支持verify:校验证书
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'spAuthToken' => null,
        'stageAuthToken' => null,
        'instanceId' => null,
        'certificateId' => null,
        'actionId' => null,
        'body' => null
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
    * spAuthToken  Sp用户Token。通过调用IoBPS服务获取SP用户Token
    * stageAuthToken  Stage用户的Token, 仅提供给IoStage服务使用
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * certificateId  设备CA证书ID，在上传设备CA证书时由平台分配的唯一标识。
    * actionId  对证书执行的操作，当前仅支持verify:校验证书
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'spAuthToken' => 'Sp-Auth-Token',
            'stageAuthToken' => 'Stage-Auth-Token',
            'instanceId' => 'Instance-Id',
            'certificateId' => 'certificate_id',
            'actionId' => 'action_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * spAuthToken  Sp用户Token。通过调用IoBPS服务获取SP用户Token
    * stageAuthToken  Stage用户的Token, 仅提供给IoStage服务使用
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * certificateId  设备CA证书ID，在上传设备CA证书时由平台分配的唯一标识。
    * actionId  对证书执行的操作，当前仅支持verify:校验证书
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'spAuthToken' => 'setSpAuthToken',
            'stageAuthToken' => 'setStageAuthToken',
            'instanceId' => 'setInstanceId',
            'certificateId' => 'setCertificateId',
            'actionId' => 'setActionId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * spAuthToken  Sp用户Token。通过调用IoBPS服务获取SP用户Token
    * stageAuthToken  Stage用户的Token, 仅提供给IoStage服务使用
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * certificateId  设备CA证书ID，在上传设备CA证书时由平台分配的唯一标识。
    * actionId  对证书执行的操作，当前仅支持verify:校验证书
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'spAuthToken' => 'getSpAuthToken',
            'stageAuthToken' => 'getStageAuthToken',
            'instanceId' => 'getInstanceId',
            'certificateId' => 'getCertificateId',
            'actionId' => 'getActionId',
            'body' => 'getBody'
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
        $this->container['spAuthToken'] = isset($data['spAuthToken']) ? $data['spAuthToken'] : null;
        $this->container['stageAuthToken'] = isset($data['stageAuthToken']) ? $data['stageAuthToken'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-f-]{1,36}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-f-]{1,36}/.";
            }
        if ($this->container['certificateId'] === null) {
            $invalidProperties[] = "'certificateId' can't be null";
        }
        if ($this->container['actionId'] === null) {
            $invalidProperties[] = "'actionId' can't be null";
        }
            if (!preg_match("/(verify)/", $this->container['actionId'])) {
                $invalidProperties[] = "invalid value for 'actionId', must be conform to the pattern /(verify)/.";
            }
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
    * Gets spAuthToken
    *  Sp用户Token。通过调用IoBPS服务获取SP用户Token
    *
    * @return string|null
    */
    public function getSpAuthToken()
    {
        return $this->container['spAuthToken'];
    }

    /**
    * Sets spAuthToken
    *
    * @param string|null $spAuthToken Sp用户Token。通过调用IoBPS服务获取SP用户Token
    *
    * @return $this
    */
    public function setSpAuthToken($spAuthToken)
    {
        $this->container['spAuthToken'] = $spAuthToken;
        return $this;
    }

    /**
    * Gets stageAuthToken
    *  Stage用户的Token, 仅提供给IoStage服务使用
    *
    * @return string|null
    */
    public function getStageAuthToken()
    {
        return $this->container['stageAuthToken'];
    }

    /**
    * Sets stageAuthToken
    *
    * @param string|null $stageAuthToken Stage用户的Token, 仅提供给IoStage服务使用
    *
    * @return $this
    */
    public function setStageAuthToken($stageAuthToken)
    {
        $this->container['stageAuthToken'] = $stageAuthToken;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets certificateId
    *  设备CA证书ID，在上传设备CA证书时由平台分配的唯一标识。
    *
    * @return string
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string $certificateId 设备CA证书ID，在上传设备CA证书时由平台分配的唯一标识。
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets actionId
    *  对证书执行的操作，当前仅支持verify:校验证书
    *
    * @return string
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string $actionId 对证书执行的操作，当前仅支持verify:校验证书
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\VerifyCertificateDTO|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\VerifyCertificateDTO|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

