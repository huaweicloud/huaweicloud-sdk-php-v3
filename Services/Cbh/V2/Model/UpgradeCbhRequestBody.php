<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeCbhRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeCbhRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  实例id
    * upgradeTime  定时升级的时间，需要比当前时间大24小时
    * cancel  是否取消升级定时任务，已开始任务不可取消。 - true：取消 - false：无影响
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'upgradeTime' => 'int',
            'cancel' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  实例id
    * upgradeTime  定时升级的时间，需要比当前时间大24小时
    * cancel  是否取消升级定时任务，已开始任务不可取消。 - true：取消 - false：无影响
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'upgradeTime' => 'int64',
        'cancel' => null
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
    * serverId  实例id
    * upgradeTime  定时升级的时间，需要比当前时间大24小时
    * cancel  是否取消升级定时任务，已开始任务不可取消。 - true：取消 - false：无影响
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'upgradeTime' => 'upgrade_time',
            'cancel' => 'cancel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  实例id
    * upgradeTime  定时升级的时间，需要比当前时间大24小时
    * cancel  是否取消升级定时任务，已开始任务不可取消。 - true：取消 - false：无影响
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'upgradeTime' => 'setUpgradeTime',
            'cancel' => 'setCancel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  实例id
    * upgradeTime  定时升级的时间，需要比当前时间大24小时
    * cancel  是否取消升级定时任务，已开始任务不可取消。 - true：取消 - false：无影响
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'upgradeTime' => 'getUpgradeTime',
            'cancel' => 'getCancel'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['upgradeTime'] = isset($data['upgradeTime']) ? $data['upgradeTime'] : null;
        $this->container['cancel'] = isset($data['cancel']) ? $data['cancel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
            if ((mb_strlen($this->container['serverId']) > 36)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['serverId']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['upgradeTime'] === null) {
            $invalidProperties[] = "'upgradeTime' can't be null";
        }
            if (($this->container['upgradeTime'] > 99999999999999)) {
                $invalidProperties[] = "invalid value for 'upgradeTime', must be smaller than or equal to 99999999999999.";
            }
            if (($this->container['upgradeTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeTime', must be bigger than or equal to 0.";
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
    * Gets serverId
    *  实例id
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId 实例id
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets upgradeTime
    *  定时升级的时间，需要比当前时间大24小时
    *
    * @return int
    */
    public function getUpgradeTime()
    {
        return $this->container['upgradeTime'];
    }

    /**
    * Sets upgradeTime
    *
    * @param int $upgradeTime 定时升级的时间，需要比当前时间大24小时
    *
    * @return $this
    */
    public function setUpgradeTime($upgradeTime)
    {
        $this->container['upgradeTime'] = $upgradeTime;
        return $this;
    }

    /**
    * Gets cancel
    *  是否取消升级定时任务，已开始任务不可取消。 - true：取消 - false：无影响
    *
    * @return bool|null
    */
    public function getCancel()
    {
        return $this->container['cancel'];
    }

    /**
    * Sets cancel
    *
    * @param bool|null $cancel 是否取消升级定时任务，已开始任务不可取消。 - true：取消 - false：无影响
    *
    * @return $this
    */
    public function setCancel($cancel)
    {
        $this->container['cancel'] = $cancel;
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

