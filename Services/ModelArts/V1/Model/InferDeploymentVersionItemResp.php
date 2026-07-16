<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InferDeploymentVersionItemResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InferDeploymentVersionItemResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inferName  **参数解释：** 部署id。 **取值范围：** 不涉及。
    * version  **参数解释：** 部署版本 **取值范围：** 不涉及。
    * versionStatus  **参数解释：** 版本状态 **取值范围：** 不涉及。
    * description  **参数解释：** 版本描述 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inferName' => 'string',
            'version' => 'string',
            'versionStatus' => 'string',
            'description' => 'string',
            'createAt' => '\DateTime',
            'updateAt' => '\DateTime',
            'deployType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inferName  **参数解释：** 部署id。 **取值范围：** 不涉及。
    * version  **参数解释：** 部署版本 **取值范围：** 不涉及。
    * versionStatus  **参数解释：** 版本状态 **取值范围：** 不涉及。
    * description  **参数解释：** 版本描述 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inferName' => null,
        'version' => null,
        'versionStatus' => null,
        'description' => null,
        'createAt' => 'date-time',
        'updateAt' => 'date-time',
        'deployType' => null
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
    * inferName  **参数解释：** 部署id。 **取值范围：** 不涉及。
    * version  **参数解释：** 部署版本 **取值范围：** 不涉及。
    * versionStatus  **参数解释：** 版本状态 **取值范围：** 不涉及。
    * description  **参数解释：** 版本描述 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inferName' => 'infer_name',
            'version' => 'version',
            'versionStatus' => 'version_status',
            'description' => 'description',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'deployType' => 'deploy_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inferName  **参数解释：** 部署id。 **取值范围：** 不涉及。
    * version  **参数解释：** 部署版本 **取值范围：** 不涉及。
    * versionStatus  **参数解释：** 版本状态 **取值范围：** 不涉及。
    * description  **参数解释：** 版本描述 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @var string[]
    */
    protected static $setters = [
            'inferName' => 'setInferName',
            'version' => 'setVersion',
            'versionStatus' => 'setVersionStatus',
            'description' => 'setDescription',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'deployType' => 'setDeployType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inferName  **参数解释：** 部署id。 **取值范围：** 不涉及。
    * version  **参数解释：** 部署版本 **取值范围：** 不涉及。
    * versionStatus  **参数解释：** 版本状态 **取值范围：** 不涉及。
    * description  **参数解释：** 版本描述 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @var string[]
    */
    protected static $getters = [
            'inferName' => 'getInferName',
            'version' => 'getVersion',
            'versionStatus' => 'getVersionStatus',
            'description' => 'getDescription',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'deployType' => 'getDeployType'
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
        $this->container['inferName'] = isset($data['inferName']) ? $data['inferName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionStatus'] = isset($data['versionStatus']) ? $data['versionStatus'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
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
    * Gets inferName
    *  **参数解释：** 部署id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getInferName()
    {
        return $this->container['inferName'];
    }

    /**
    * Sets inferName
    *
    * @param string|null $inferName **参数解释：** 部署id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInferName($inferName)
    {
        $this->container['inferName'] = $inferName;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 部署版本 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释：** 部署版本 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets versionStatus
    *  **参数解释：** 版本状态 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getVersionStatus()
    {
        return $this->container['versionStatus'];
    }

    /**
    * Sets versionStatus
    *
    * @param string|null $versionStatus **参数解释：** 版本状态 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVersionStatus($versionStatus)
    {
        $this->container['versionStatus'] = $versionStatus;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 版本描述 **取值范围：** 不涉及。
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
    * @param string|null $description **参数解释：** 版本描述 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 创建时间 **取值范围：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param \DateTime|null $createAt **参数解释：** 创建时间 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 更新时间 **取值范围：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param \DateTime|null $updateAt **参数解释：** 更新时间 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets deployType
    *  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
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

