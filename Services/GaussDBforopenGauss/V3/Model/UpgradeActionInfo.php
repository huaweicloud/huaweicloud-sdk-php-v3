<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeActionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeActionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradeAction  升级操作,upgrade=升级,upgradeAutoCommit=升级自动提交,commit=提交,rollback=回滚
    * enable  可用，不可用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradeAction' => 'string',
            'enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradeAction  升级操作,upgrade=升级,upgradeAutoCommit=升级自动提交,commit=提交,rollback=回滚
    * enable  可用，不可用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradeAction' => null,
        'enable' => null
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
    * upgradeAction  升级操作,upgrade=升级,upgradeAutoCommit=升级自动提交,commit=提交,rollback=回滚
    * enable  可用，不可用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradeAction' => 'upgrade_action',
            'enable' => 'enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradeAction  升级操作,upgrade=升级,upgradeAutoCommit=升级自动提交,commit=提交,rollback=回滚
    * enable  可用，不可用
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradeAction' => 'setUpgradeAction',
            'enable' => 'setEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradeAction  升级操作,upgrade=升级,upgradeAutoCommit=升级自动提交,commit=提交,rollback=回滚
    * enable  可用，不可用
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradeAction' => 'getUpgradeAction',
            'enable' => 'getEnable'
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
    const UPGRADE_ACTION_UPGRADE = 'upgrade';
    const UPGRADE_ACTION_UPGRADE_AUTO_COMMIT = 'upgradeAutoCommit';
    const UPGRADE_ACTION_COMMIT = 'commit';
    const UPGRADE_ACTION_ROLLBACK = 'rollback';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradeActionAllowableValues()
    {
        return [
            self::UPGRADE_ACTION_UPGRADE,
            self::UPGRADE_ACTION_UPGRADE_AUTO_COMMIT,
            self::UPGRADE_ACTION_COMMIT,
            self::UPGRADE_ACTION_ROLLBACK,
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
        $this->container['upgradeAction'] = isset($data['upgradeAction']) ? $data['upgradeAction'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getUpgradeActionAllowableValues();
                if (!is_null($this->container['upgradeAction']) && !in_array($this->container['upgradeAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgradeAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['upgradeAction']) && (mb_strlen($this->container['upgradeAction']) > 1000)) {
                $invalidProperties[] = "invalid value for 'upgradeAction', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['upgradeAction']) && (mb_strlen($this->container['upgradeAction']) < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeAction', the character length must be bigger than or equal to 0.";
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
    * Gets upgradeAction
    *  升级操作,upgrade=升级,upgradeAutoCommit=升级自动提交,commit=提交,rollback=回滚
    *
    * @return string|null
    */
    public function getUpgradeAction()
    {
        return $this->container['upgradeAction'];
    }

    /**
    * Sets upgradeAction
    *
    * @param string|null $upgradeAction 升级操作,upgrade=升级,upgradeAutoCommit=升级自动提交,commit=提交,rollback=回滚
    *
    * @return $this
    */
    public function setUpgradeAction($upgradeAction)
    {
        $this->container['upgradeAction'] = $upgradeAction;
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

