<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradingTheKernelBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradingTheKernelBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetImageId  目标镜像版本ID。
    * upgradeType  升级类型。 - same：同版本。 - cross：跨版本。
    * indicesBackupCheck  是否进行备份校验。 - true：进行校验。 - false：不进行校验。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * checkLoad  是否校验负载。默认为true。 - true：进行校验。 - false：不进行校验。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetImageId' => 'string',
            'upgradeType' => 'string',
            'indicesBackupCheck' => 'bool',
            'agency' => 'string',
            'checkLoad' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetImageId  目标镜像版本ID。
    * upgradeType  升级类型。 - same：同版本。 - cross：跨版本。
    * indicesBackupCheck  是否进行备份校验。 - true：进行校验。 - false：不进行校验。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * checkLoad  是否校验负载。默认为true。 - true：进行校验。 - false：不进行校验。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetImageId' => null,
        'upgradeType' => null,
        'indicesBackupCheck' => null,
        'agency' => null,
        'checkLoad' => null
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
    * targetImageId  目标镜像版本ID。
    * upgradeType  升级类型。 - same：同版本。 - cross：跨版本。
    * indicesBackupCheck  是否进行备份校验。 - true：进行校验。 - false：不进行校验。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * checkLoad  是否校验负载。默认为true。 - true：进行校验。 - false：不进行校验。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetImageId' => 'target_image_id',
            'upgradeType' => 'upgrade_type',
            'indicesBackupCheck' => 'indices_backup_check',
            'agency' => 'agency',
            'checkLoad' => 'check_load'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetImageId  目标镜像版本ID。
    * upgradeType  升级类型。 - same：同版本。 - cross：跨版本。
    * indicesBackupCheck  是否进行备份校验。 - true：进行校验。 - false：不进行校验。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * checkLoad  是否校验负载。默认为true。 - true：进行校验。 - false：不进行校验。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetImageId' => 'setTargetImageId',
            'upgradeType' => 'setUpgradeType',
            'indicesBackupCheck' => 'setIndicesBackupCheck',
            'agency' => 'setAgency',
            'checkLoad' => 'setCheckLoad'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetImageId  目标镜像版本ID。
    * upgradeType  升级类型。 - same：同版本。 - cross：跨版本。
    * indicesBackupCheck  是否进行备份校验。 - true：进行校验。 - false：不进行校验。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * checkLoad  是否校验负载。默认为true。 - true：进行校验。 - false：不进行校验。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetImageId' => 'getTargetImageId',
            'upgradeType' => 'getUpgradeType',
            'indicesBackupCheck' => 'getIndicesBackupCheck',
            'agency' => 'getAgency',
            'checkLoad' => 'getCheckLoad'
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
    const UPGRADE_TYPE_SAME = 'same';
    const UPGRADE_TYPE_CROSS = 'cross';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradeTypeAllowableValues()
    {
        return [
            self::UPGRADE_TYPE_SAME,
            self::UPGRADE_TYPE_CROSS,
        ];
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
        $this->container['targetImageId'] = isset($data['targetImageId']) ? $data['targetImageId'] : null;
        $this->container['upgradeType'] = isset($data['upgradeType']) ? $data['upgradeType'] : null;
        $this->container['indicesBackupCheck'] = isset($data['indicesBackupCheck']) ? $data['indicesBackupCheck'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['checkLoad'] = isset($data['checkLoad']) ? $data['checkLoad'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetImageId'] === null) {
            $invalidProperties[] = "'targetImageId' can't be null";
        }
        if ($this->container['upgradeType'] === null) {
            $invalidProperties[] = "'upgradeType' can't be null";
        }
            $allowedValues = $this->getUpgradeTypeAllowableValues();
                if (!is_null($this->container['upgradeType']) && !in_array($this->container['upgradeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgradeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['indicesBackupCheck'] === null) {
            $invalidProperties[] = "'indicesBackupCheck' can't be null";
        }
        if ($this->container['agency'] === null) {
            $invalidProperties[] = "'agency' can't be null";
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
    * Gets targetImageId
    *  目标镜像版本ID。
    *
    * @return string
    */
    public function getTargetImageId()
    {
        return $this->container['targetImageId'];
    }

    /**
    * Sets targetImageId
    *
    * @param string $targetImageId 目标镜像版本ID。
    *
    * @return $this
    */
    public function setTargetImageId($targetImageId)
    {
        $this->container['targetImageId'] = $targetImageId;
        return $this;
    }

    /**
    * Gets upgradeType
    *  升级类型。 - same：同版本。 - cross：跨版本。
    *
    * @return string
    */
    public function getUpgradeType()
    {
        return $this->container['upgradeType'];
    }

    /**
    * Sets upgradeType
    *
    * @param string $upgradeType 升级类型。 - same：同版本。 - cross：跨版本。
    *
    * @return $this
    */
    public function setUpgradeType($upgradeType)
    {
        $this->container['upgradeType'] = $upgradeType;
        return $this;
    }

    /**
    * Gets indicesBackupCheck
    *  是否进行备份校验。 - true：进行校验。 - false：不进行校验。
    *
    * @return bool
    */
    public function getIndicesBackupCheck()
    {
        return $this->container['indicesBackupCheck'];
    }

    /**
    * Sets indicesBackupCheck
    *
    * @param bool $indicesBackupCheck 是否进行备份校验。 - true：进行校验。 - false：不进行校验。
    *
    * @return $this
    */
    public function setIndicesBackupCheck($indicesBackupCheck)
    {
        $this->container['indicesBackupCheck'] = $indicesBackupCheck;
        return $this;
    }

    /**
    * Gets agency
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return string
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string $agency 委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets checkLoad
    *  是否校验负载。默认为true。 - true：进行校验。 - false：不进行校验。
    *
    * @return bool|null
    */
    public function getCheckLoad()
    {
        return $this->container['checkLoad'];
    }

    /**
    * Sets checkLoad
    *
    * @param bool|null $checkLoad 是否校验负载。默认为true。 - true：进行校验。 - false：不进行校验。
    *
    * @return $this
    */
    public function setCheckLoad($checkLoad)
    {
        $this->container['checkLoad'] = $checkLoad;
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

