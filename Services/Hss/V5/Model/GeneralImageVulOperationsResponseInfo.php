<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralImageVulOperationsResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralImageVulOperationsResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  镜像id
    * imageName  镜像名称
    * userName  处置用户名称
    * handleTime  处置时间，时间单位：毫秒（ms）
    * handleType  操作类型，包含如下：   -ignore : 忽略   -not_ignore : 取消忽略   -add_to_whitelist ：加入白名单
    * status  漏洞当前状态，包含如下：   -vul_status_unfix : 未处理   -vul_status_ignored : 已忽略
    * appName  软件名称
    * appVersion  软件版本
    * appPath  软件路径
    * remark  备注
    * imageDigest  镜像标识
    * imageVersion  镜像版本
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'imageName' => 'string',
            'userName' => 'string',
            'handleTime' => 'int',
            'handleType' => 'string',
            'status' => 'string',
            'appName' => 'string',
            'appVersion' => 'string',
            'appPath' => 'string',
            'remark' => 'string',
            'imageDigest' => 'string',
            'imageVersion' => 'string',
            'agentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  镜像id
    * imageName  镜像名称
    * userName  处置用户名称
    * handleTime  处置时间，时间单位：毫秒（ms）
    * handleType  操作类型，包含如下：   -ignore : 忽略   -not_ignore : 取消忽略   -add_to_whitelist ：加入白名单
    * status  漏洞当前状态，包含如下：   -vul_status_unfix : 未处理   -vul_status_ignored : 已忽略
    * appName  软件名称
    * appVersion  软件版本
    * appPath  软件路径
    * remark  备注
    * imageDigest  镜像标识
    * imageVersion  镜像版本
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'imageName' => null,
        'userName' => null,
        'handleTime' => 'int64',
        'handleType' => null,
        'status' => null,
        'appName' => null,
        'appVersion' => null,
        'appPath' => null,
        'remark' => null,
        'imageDigest' => null,
        'imageVersion' => null,
        'agentId' => null
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
    * imageId  镜像id
    * imageName  镜像名称
    * userName  处置用户名称
    * handleTime  处置时间，时间单位：毫秒（ms）
    * handleType  操作类型，包含如下：   -ignore : 忽略   -not_ignore : 取消忽略   -add_to_whitelist ：加入白名单
    * status  漏洞当前状态，包含如下：   -vul_status_unfix : 未处理   -vul_status_ignored : 已忽略
    * appName  软件名称
    * appVersion  软件版本
    * appPath  软件路径
    * remark  备注
    * imageDigest  镜像标识
    * imageVersion  镜像版本
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'userName' => 'user_name',
            'handleTime' => 'handle_time',
            'handleType' => 'handle_type',
            'status' => 'status',
            'appName' => 'app_name',
            'appVersion' => 'app_version',
            'appPath' => 'app_path',
            'remark' => 'remark',
            'imageDigest' => 'image_digest',
            'imageVersion' => 'image_version',
            'agentId' => 'agent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  镜像id
    * imageName  镜像名称
    * userName  处置用户名称
    * handleTime  处置时间，时间单位：毫秒（ms）
    * handleType  操作类型，包含如下：   -ignore : 忽略   -not_ignore : 取消忽略   -add_to_whitelist ：加入白名单
    * status  漏洞当前状态，包含如下：   -vul_status_unfix : 未处理   -vul_status_ignored : 已忽略
    * appName  软件名称
    * appVersion  软件版本
    * appPath  软件路径
    * remark  备注
    * imageDigest  镜像标识
    * imageVersion  镜像版本
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'userName' => 'setUserName',
            'handleTime' => 'setHandleTime',
            'handleType' => 'setHandleType',
            'status' => 'setStatus',
            'appName' => 'setAppName',
            'appVersion' => 'setAppVersion',
            'appPath' => 'setAppPath',
            'remark' => 'setRemark',
            'imageDigest' => 'setImageDigest',
            'imageVersion' => 'setImageVersion',
            'agentId' => 'setAgentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  镜像id
    * imageName  镜像名称
    * userName  处置用户名称
    * handleTime  处置时间，时间单位：毫秒（ms）
    * handleType  操作类型，包含如下：   -ignore : 忽略   -not_ignore : 取消忽略   -add_to_whitelist ：加入白名单
    * status  漏洞当前状态，包含如下：   -vul_status_unfix : 未处理   -vul_status_ignored : 已忽略
    * appName  软件名称
    * appVersion  软件版本
    * appPath  软件路径
    * remark  备注
    * imageDigest  镜像标识
    * imageVersion  镜像版本
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'userName' => 'getUserName',
            'handleTime' => 'getHandleTime',
            'handleType' => 'getHandleType',
            'status' => 'getStatus',
            'appName' => 'getAppName',
            'appVersion' => 'getAppVersion',
            'appPath' => 'getAppPath',
            'remark' => 'getRemark',
            'imageDigest' => 'getImageDigest',
            'imageVersion' => 'getImageVersion',
            'agentId' => 'getAgentId'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
        $this->container['handleType'] = isset($data['handleType']) ? $data['handleType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 256)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleType']) && !preg_match("/^ignore|not_ignore|add_to_whitelist$/", $this->container['handleType'])) {
                $invalidProperties[] = "invalid value for 'handleType', must be conform to the pattern /^ignore|not_ignore|add_to_whitelist$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^vul_status_unfix|vul_status_ignored$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^vul_status_unfix|vul_status_ignored$/.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 256)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 512)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
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
    * Gets imageId
    *  镜像id
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets userName
    *  处置用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 处置用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets handleTime
    *  处置时间，时间单位：毫秒（ms）
    *
    * @return int|null
    */
    public function getHandleTime()
    {
        return $this->container['handleTime'];
    }

    /**
    * Sets handleTime
    *
    * @param int|null $handleTime 处置时间，时间单位：毫秒（ms）
    *
    * @return $this
    */
    public function setHandleTime($handleTime)
    {
        $this->container['handleTime'] = $handleTime;
        return $this;
    }

    /**
    * Gets handleType
    *  操作类型，包含如下：   -ignore : 忽略   -not_ignore : 取消忽略   -add_to_whitelist ：加入白名单
    *
    * @return string|null
    */
    public function getHandleType()
    {
        return $this->container['handleType'];
    }

    /**
    * Sets handleType
    *
    * @param string|null $handleType 操作类型，包含如下：   -ignore : 忽略   -not_ignore : 取消忽略   -add_to_whitelist ：加入白名单
    *
    * @return $this
    */
    public function setHandleType($handleType)
    {
        $this->container['handleType'] = $handleType;
        return $this;
    }

    /**
    * Gets status
    *  漏洞当前状态，包含如下：   -vul_status_unfix : 未处理   -vul_status_ignored : 已忽略
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 漏洞当前状态，包含如下：   -vul_status_unfix : 未处理   -vul_status_ignored : 已忽略
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets appName
    *  软件名称
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
    * @param string|null $appName 软件名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appVersion
    *  软件版本
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 软件版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets appPath
    *  软件路径
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath 软件路径
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets remark
    *  备注
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets imageDigest
    *  镜像标识
    *
    * @return string|null
    */
    public function getImageDigest()
    {
        return $this->container['imageDigest'];
    }

    /**
    * Sets imageDigest
    *
    * @param string|null $imageDigest 镜像标识
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
        return $this;
    }

    /**
    * Gets imageVersion
    *  镜像版本
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion 镜像版本
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets agentId
    *  Agent ID
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId Agent ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
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

