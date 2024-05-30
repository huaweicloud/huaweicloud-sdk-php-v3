<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeTypeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeTypeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradeType  升级类型,grey=灰度升级,inplace=就地升级,hotfix=热补丁升级
    * enable  可用，不可用
    * upgradeActionList  升级操作列表
    * isParallelUpgrade  是否正在进行AZ内并行升级。 -true：当前实例处于灰度升级的升级待观察升级方式中，已选择了AZ内并行升级方式，后续无法更改。 -false：当前实例处于升级流程中，未选择AZ内并行升级的方式，后续无法更改。null：当前实例尚未处于升级流程中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradeType' => 'string',
            'enable' => 'bool',
            'upgradeActionList' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeActionInfo[]',
            'isParallelUpgrade' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradeType  升级类型,grey=灰度升级,inplace=就地升级,hotfix=热补丁升级
    * enable  可用，不可用
    * upgradeActionList  升级操作列表
    * isParallelUpgrade  是否正在进行AZ内并行升级。 -true：当前实例处于灰度升级的升级待观察升级方式中，已选择了AZ内并行升级方式，后续无法更改。 -false：当前实例处于升级流程中，未选择AZ内并行升级的方式，后续无法更改。null：当前实例尚未处于升级流程中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradeType' => null,
        'enable' => null,
        'upgradeActionList' => null,
        'isParallelUpgrade' => null
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
    * upgradeType  升级类型,grey=灰度升级,inplace=就地升级,hotfix=热补丁升级
    * enable  可用，不可用
    * upgradeActionList  升级操作列表
    * isParallelUpgrade  是否正在进行AZ内并行升级。 -true：当前实例处于灰度升级的升级待观察升级方式中，已选择了AZ内并行升级方式，后续无法更改。 -false：当前实例处于升级流程中，未选择AZ内并行升级的方式，后续无法更改。null：当前实例尚未处于升级流程中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradeType' => 'upgrade_type',
            'enable' => 'enable',
            'upgradeActionList' => 'upgrade_action_list',
            'isParallelUpgrade' => 'is_parallel_upgrade'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradeType  升级类型,grey=灰度升级,inplace=就地升级,hotfix=热补丁升级
    * enable  可用，不可用
    * upgradeActionList  升级操作列表
    * isParallelUpgrade  是否正在进行AZ内并行升级。 -true：当前实例处于灰度升级的升级待观察升级方式中，已选择了AZ内并行升级方式，后续无法更改。 -false：当前实例处于升级流程中，未选择AZ内并行升级的方式，后续无法更改。null：当前实例尚未处于升级流程中。
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradeType' => 'setUpgradeType',
            'enable' => 'setEnable',
            'upgradeActionList' => 'setUpgradeActionList',
            'isParallelUpgrade' => 'setIsParallelUpgrade'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradeType  升级类型,grey=灰度升级,inplace=就地升级,hotfix=热补丁升级
    * enable  可用，不可用
    * upgradeActionList  升级操作列表
    * isParallelUpgrade  是否正在进行AZ内并行升级。 -true：当前实例处于灰度升级的升级待观察升级方式中，已选择了AZ内并行升级方式，后续无法更改。 -false：当前实例处于升级流程中，未选择AZ内并行升级的方式，后续无法更改。null：当前实例尚未处于升级流程中。
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradeType' => 'getUpgradeType',
            'enable' => 'getEnable',
            'upgradeActionList' => 'getUpgradeActionList',
            'isParallelUpgrade' => 'getIsParallelUpgrade'
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
    const UPGRADE_TYPE_GREY = 'grey';
    const UPGRADE_TYPE_INPLACE = 'inplace';
    const UPGRADE_TYPE_HOTFIX = 'hotfix';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradeTypeAllowableValues()
    {
        return [
            self::UPGRADE_TYPE_GREY,
            self::UPGRADE_TYPE_INPLACE,
            self::UPGRADE_TYPE_HOTFIX,
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
        $this->container['upgradeType'] = isset($data['upgradeType']) ? $data['upgradeType'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['upgradeActionList'] = isset($data['upgradeActionList']) ? $data['upgradeActionList'] : null;
        $this->container['isParallelUpgrade'] = isset($data['isParallelUpgrade']) ? $data['isParallelUpgrade'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getUpgradeTypeAllowableValues();
                if (!is_null($this->container['upgradeType']) && !in_array($this->container['upgradeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgradeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['upgradeType']) && (mb_strlen($this->container['upgradeType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'upgradeType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['upgradeType']) && (mb_strlen($this->container['upgradeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeType', the character length must be bigger than or equal to 0.";
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
    * Gets upgradeType
    *  升级类型,grey=灰度升级,inplace=就地升级,hotfix=热补丁升级
    *
    * @return string|null
    */
    public function getUpgradeType()
    {
        return $this->container['upgradeType'];
    }

    /**
    * Sets upgradeType
    *
    * @param string|null $upgradeType 升级类型,grey=灰度升级,inplace=就地升级,hotfix=热补丁升级
    *
    * @return $this
    */
    public function setUpgradeType($upgradeType)
    {
        $this->container['upgradeType'] = $upgradeType;
        return $this;
    }

    /**
    * Gets enable
    *  可用，不可用
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 可用，不可用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets upgradeActionList
    *  升级操作列表
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeActionInfo[]|null
    */
    public function getUpgradeActionList()
    {
        return $this->container['upgradeActionList'];
    }

    /**
    * Sets upgradeActionList
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeActionInfo[]|null $upgradeActionList 升级操作列表
    *
    * @return $this
    */
    public function setUpgradeActionList($upgradeActionList)
    {
        $this->container['upgradeActionList'] = $upgradeActionList;
        return $this;
    }

    /**
    * Gets isParallelUpgrade
    *  是否正在进行AZ内并行升级。 -true：当前实例处于灰度升级的升级待观察升级方式中，已选择了AZ内并行升级方式，后续无法更改。 -false：当前实例处于升级流程中，未选择AZ内并行升级的方式，后续无法更改。null：当前实例尚未处于升级流程中。
    *
    * @return bool|null
    */
    public function getIsParallelUpgrade()
    {
        return $this->container['isParallelUpgrade'];
    }

    /**
    * Sets isParallelUpgrade
    *
    * @param bool|null $isParallelUpgrade 是否正在进行AZ内并行升级。 -true：当前实例处于灰度升级的升级待观察升级方式中，已选择了AZ内并行升级方式，后续无法更改。 -false：当前实例处于升级流程中，未选择AZ内并行升级的方式，后续无法更改。null：当前实例尚未处于升级流程中。
    *
    * @return $this
    */
    public function setIsParallelUpgrade($isParallelUpgrade)
    {
        $this->container['isParallelUpgrade'] = $isParallelUpgrade;
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

