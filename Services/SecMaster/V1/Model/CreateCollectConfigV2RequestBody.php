<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCollectConfigV2RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCollectConfigV2RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * config  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsConfig  lts配置
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'config' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ConfigInfo[]',
            'dataspaceId' => 'string',
            'dataspaceName' => 'string',
            'domainId' => 'string',
            'ltsConfig' => '\HuaweiCloud\SDK\SecMaster\V1\Model\LtsRquestVo[]',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * config  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsConfig  lts配置
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'config' => null,
        'dataspaceId' => null,
        'dataspaceName' => null,
        'domainId' => null,
        'ltsConfig' => null,
        'workspaceId' => null
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
    * config  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsConfig  lts配置
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'config' => 'config',
            'dataspaceId' => 'dataspace_id',
            'dataspaceName' => 'dataspace_name',
            'domainId' => 'domain_id',
            'ltsConfig' => 'lts_config',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * config  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsConfig  lts配置
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $setters = [
            'config' => 'setConfig',
            'dataspaceId' => 'setDataspaceId',
            'dataspaceName' => 'setDataspaceName',
            'domainId' => 'setDomainId',
            'ltsConfig' => 'setLtsConfig',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * config  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsConfig  lts配置
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $getters = [
            'config' => 'getConfig',
            'dataspaceId' => 'getDataspaceId',
            'dataspaceName' => 'getDataspaceName',
            'domainId' => 'getDomainId',
            'ltsConfig' => 'getLtsConfig',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['dataspaceName'] = isset($data['dataspaceName']) ? $data['dataspaceName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ltsConfig'] = isset($data['ltsConfig']) ? $data['ltsConfig'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['dataspaceId'] === null) {
            $invalidProperties[] = "'dataspaceId' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['dataspaceName'] === null) {
            $invalidProperties[] = "'dataspaceName' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceName']) > 255)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['dataspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
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
    * Gets config
    *  数据集列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ConfigInfo[]
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ConfigInfo[] $config 数据集列表
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets dataspaceName
    *  数据空间名称
    *
    * @return string
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string $dataspaceName 数据空间名称
    *
    * @return $this
    */
    public function setDataspaceName($dataspaceName)
    {
        $this->container['dataspaceName'] = $dataspaceName;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ltsConfig
    *  lts配置
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\LtsRquestVo[]|null
    */
    public function getLtsConfig()
    {
        return $this->container['ltsConfig'];
    }

    /**
    * Sets ltsConfig
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\LtsRquestVo[]|null $ltsConfig lts配置
    *
    * @return $this
    */
    public function setLtsConfig($ltsConfig)
    {
        $this->container['ltsConfig'] = $ltsConfig;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间 id
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间 id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

