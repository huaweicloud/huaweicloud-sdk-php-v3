<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceSecretResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceSecretResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secretEnable  **参数解释：** 是否启用密钥。 **取值范围：** - true：启用密钥。 - false：不启用密钥。
    * secretType  **参数解释：** 密钥类型。 **取值范围：** - custom：自定义密钥。 - [dew：DEW密钥。](tag:hws,hws_hk,fcs)
    * secretVolumes  **参数解释：** 密钥挂载。 **约束限制：** 上限30个。
    * groupEnable  **参数解释：** 是否启用镜像的用户组。 **取值范围：** - true：启用镜像的用户组。 - false：不启用镜像的用户组。
    * groupId  **参数解释：** 镜像的用户组ID。 **取值范围：** 1000~4294967294。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secretEnable' => 'bool',
            'secretType' => 'string',
            'secretVolumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SecretVolumeResponse[]',
            'groupEnable' => 'bool',
            'groupId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secretEnable  **参数解释：** 是否启用密钥。 **取值范围：** - true：启用密钥。 - false：不启用密钥。
    * secretType  **参数解释：** 密钥类型。 **取值范围：** - custom：自定义密钥。 - [dew：DEW密钥。](tag:hws,hws_hk,fcs)
    * secretVolumes  **参数解释：** 密钥挂载。 **约束限制：** 上限30个。
    * groupEnable  **参数解释：** 是否启用镜像的用户组。 **取值范围：** - true：启用镜像的用户组。 - false：不启用镜像的用户组。
    * groupId  **参数解释：** 镜像的用户组ID。 **取值范围：** 1000~4294967294。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secretEnable' => null,
        'secretType' => null,
        'secretVolumes' => null,
        'groupEnable' => null,
        'groupId' => 'int64'
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
    * secretEnable  **参数解释：** 是否启用密钥。 **取值范围：** - true：启用密钥。 - false：不启用密钥。
    * secretType  **参数解释：** 密钥类型。 **取值范围：** - custom：自定义密钥。 - [dew：DEW密钥。](tag:hws,hws_hk,fcs)
    * secretVolumes  **参数解释：** 密钥挂载。 **约束限制：** 上限30个。
    * groupEnable  **参数解释：** 是否启用镜像的用户组。 **取值范围：** - true：启用镜像的用户组。 - false：不启用镜像的用户组。
    * groupId  **参数解释：** 镜像的用户组ID。 **取值范围：** 1000~4294967294。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secretEnable' => 'secret_enable',
            'secretType' => 'secret_type',
            'secretVolumes' => 'secret_volumes',
            'groupEnable' => 'group_enable',
            'groupId' => 'group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secretEnable  **参数解释：** 是否启用密钥。 **取值范围：** - true：启用密钥。 - false：不启用密钥。
    * secretType  **参数解释：** 密钥类型。 **取值范围：** - custom：自定义密钥。 - [dew：DEW密钥。](tag:hws,hws_hk,fcs)
    * secretVolumes  **参数解释：** 密钥挂载。 **约束限制：** 上限30个。
    * groupEnable  **参数解释：** 是否启用镜像的用户组。 **取值范围：** - true：启用镜像的用户组。 - false：不启用镜像的用户组。
    * groupId  **参数解释：** 镜像的用户组ID。 **取值范围：** 1000~4294967294。
    *
    * @var string[]
    */
    protected static $setters = [
            'secretEnable' => 'setSecretEnable',
            'secretType' => 'setSecretType',
            'secretVolumes' => 'setSecretVolumes',
            'groupEnable' => 'setGroupEnable',
            'groupId' => 'setGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secretEnable  **参数解释：** 是否启用密钥。 **取值范围：** - true：启用密钥。 - false：不启用密钥。
    * secretType  **参数解释：** 密钥类型。 **取值范围：** - custom：自定义密钥。 - [dew：DEW密钥。](tag:hws,hws_hk,fcs)
    * secretVolumes  **参数解释：** 密钥挂载。 **约束限制：** 上限30个。
    * groupEnable  **参数解释：** 是否启用镜像的用户组。 **取值范围：** - true：启用镜像的用户组。 - false：不启用镜像的用户组。
    * groupId  **参数解释：** 镜像的用户组ID。 **取值范围：** 1000~4294967294。
    *
    * @var string[]
    */
    protected static $getters = [
            'secretEnable' => 'getSecretEnable',
            'secretType' => 'getSecretType',
            'secretVolumes' => 'getSecretVolumes',
            'groupEnable' => 'getGroupEnable',
            'groupId' => 'getGroupId'
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
        $this->container['secretEnable'] = isset($data['secretEnable']) ? $data['secretEnable'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['secretVolumes'] = isset($data['secretVolumes']) ? $data['secretVolumes'] : null;
        $this->container['groupEnable'] = isset($data['groupEnable']) ? $data['groupEnable'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
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
    * Gets secretEnable
    *  **参数解释：** 是否启用密钥。 **取值范围：** - true：启用密钥。 - false：不启用密钥。
    *
    * @return bool|null
    */
    public function getSecretEnable()
    {
        return $this->container['secretEnable'];
    }

    /**
    * Sets secretEnable
    *
    * @param bool|null $secretEnable **参数解释：** 是否启用密钥。 **取值范围：** - true：启用密钥。 - false：不启用密钥。
    *
    * @return $this
    */
    public function setSecretEnable($secretEnable)
    {
        $this->container['secretEnable'] = $secretEnable;
        return $this;
    }

    /**
    * Gets secretType
    *  **参数解释：** 密钥类型。 **取值范围：** - custom：自定义密钥。 - [dew：DEW密钥。](tag:hws,hws_hk,fcs)
    *
    * @return string|null
    */
    public function getSecretType()
    {
        return $this->container['secretType'];
    }

    /**
    * Sets secretType
    *
    * @param string|null $secretType **参数解释：** 密钥类型。 **取值范围：** - custom：自定义密钥。 - [dew：DEW密钥。](tag:hws,hws_hk,fcs)
    *
    * @return $this
    */
    public function setSecretType($secretType)
    {
        $this->container['secretType'] = $secretType;
        return $this;
    }

    /**
    * Gets secretVolumes
    *  **参数解释：** 密钥挂载。 **约束限制：** 上限30个。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SecretVolumeResponse[]|null
    */
    public function getSecretVolumes()
    {
        return $this->container['secretVolumes'];
    }

    /**
    * Sets secretVolumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SecretVolumeResponse[]|null $secretVolumes **参数解释：** 密钥挂载。 **约束限制：** 上限30个。
    *
    * @return $this
    */
    public function setSecretVolumes($secretVolumes)
    {
        $this->container['secretVolumes'] = $secretVolumes;
        return $this;
    }

    /**
    * Gets groupEnable
    *  **参数解释：** 是否启用镜像的用户组。 **取值范围：** - true：启用镜像的用户组。 - false：不启用镜像的用户组。
    *
    * @return bool|null
    */
    public function getGroupEnable()
    {
        return $this->container['groupEnable'];
    }

    /**
    * Sets groupEnable
    *
    * @param bool|null $groupEnable **参数解释：** 是否启用镜像的用户组。 **取值范围：** - true：启用镜像的用户组。 - false：不启用镜像的用户组。
    *
    * @return $this
    */
    public function setGroupEnable($groupEnable)
    {
        $this->container['groupEnable'] = $groupEnable;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释：** 镜像的用户组ID。 **取值范围：** 1000~4294967294。
    *
    * @return int|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param int|null $groupId **参数解释：** 镜像的用户组ID。 **取值范围：** 1000~4294967294。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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

