<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vaultHostNum  **参数解释**: 勒索病毒防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * raspHostNum  **参数解释**: 应用防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * wtpHostNum  **参数解释**: 网页防篡改开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * twoFactorHostNum  **参数解释**: 双因子认证开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * isolatedFileNum  **参数解释**: 隔离文件数量 **取值范围**: 最小值0，最大值2147483647
    * supportTwoFactorHostNum  **参数解释**: 支持开启双因子的主机数量 **取值范围**: 最小值0，最大值2147483647
    * appProcessHostNum  **参数解释**: 开启应用进程的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vaultHostNum' => 'int',
            'raspHostNum' => 'int',
            'wtpHostNum' => 'int',
            'twoFactorHostNum' => 'int',
            'isolatedFileNum' => 'int',
            'supportTwoFactorHostNum' => 'int',
            'appProcessHostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vaultHostNum  **参数解释**: 勒索病毒防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * raspHostNum  **参数解释**: 应用防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * wtpHostNum  **参数解释**: 网页防篡改开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * twoFactorHostNum  **参数解释**: 双因子认证开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * isolatedFileNum  **参数解释**: 隔离文件数量 **取值范围**: 最小值0，最大值2147483647
    * supportTwoFactorHostNum  **参数解释**: 支持开启双因子的主机数量 **取值范围**: 最小值0，最大值2147483647
    * appProcessHostNum  **参数解释**: 开启应用进程的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vaultHostNum' => 'int32',
        'raspHostNum' => 'int32',
        'wtpHostNum' => 'int32',
        'twoFactorHostNum' => 'int32',
        'isolatedFileNum' => 'int32',
        'supportTwoFactorHostNum' => 'int32',
        'appProcessHostNum' => 'int32'
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
    * vaultHostNum  **参数解释**: 勒索病毒防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * raspHostNum  **参数解释**: 应用防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * wtpHostNum  **参数解释**: 网页防篡改开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * twoFactorHostNum  **参数解释**: 双因子认证开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * isolatedFileNum  **参数解释**: 隔离文件数量 **取值范围**: 最小值0，最大值2147483647
    * supportTwoFactorHostNum  **参数解释**: 支持开启双因子的主机数量 **取值范围**: 最小值0，最大值2147483647
    * appProcessHostNum  **参数解释**: 开启应用进程的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vaultHostNum' => 'vault_host_num',
            'raspHostNum' => 'rasp_host_num',
            'wtpHostNum' => 'wtp_host_num',
            'twoFactorHostNum' => 'two_factor_host_num',
            'isolatedFileNum' => 'isolated_file_num',
            'supportTwoFactorHostNum' => 'support_two_factor_host_num',
            'appProcessHostNum' => 'app_process_host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vaultHostNum  **参数解释**: 勒索病毒防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * raspHostNum  **参数解释**: 应用防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * wtpHostNum  **参数解释**: 网页防篡改开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * twoFactorHostNum  **参数解释**: 双因子认证开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * isolatedFileNum  **参数解释**: 隔离文件数量 **取值范围**: 最小值0，最大值2147483647
    * supportTwoFactorHostNum  **参数解释**: 支持开启双因子的主机数量 **取值范围**: 最小值0，最大值2147483647
    * appProcessHostNum  **参数解释**: 开启应用进程的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'vaultHostNum' => 'setVaultHostNum',
            'raspHostNum' => 'setRaspHostNum',
            'wtpHostNum' => 'setWtpHostNum',
            'twoFactorHostNum' => 'setTwoFactorHostNum',
            'isolatedFileNum' => 'setIsolatedFileNum',
            'supportTwoFactorHostNum' => 'setSupportTwoFactorHostNum',
            'appProcessHostNum' => 'setAppProcessHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vaultHostNum  **参数解释**: 勒索病毒防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * raspHostNum  **参数解释**: 应用防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * wtpHostNum  **参数解释**: 网页防篡改开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * twoFactorHostNum  **参数解释**: 双因子认证开启主机数量 **取值范围**: 最小值0，最大值2147483647
    * isolatedFileNum  **参数解释**: 隔离文件数量 **取值范围**: 最小值0，最大值2147483647
    * supportTwoFactorHostNum  **参数解释**: 支持开启双因子的主机数量 **取值范围**: 最小值0，最大值2147483647
    * appProcessHostNum  **参数解释**: 开启应用进程的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'vaultHostNum' => 'getVaultHostNum',
            'raspHostNum' => 'getRaspHostNum',
            'wtpHostNum' => 'getWtpHostNum',
            'twoFactorHostNum' => 'getTwoFactorHostNum',
            'isolatedFileNum' => 'getIsolatedFileNum',
            'supportTwoFactorHostNum' => 'getSupportTwoFactorHostNum',
            'appProcessHostNum' => 'getAppProcessHostNum'
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
        $this->container['vaultHostNum'] = isset($data['vaultHostNum']) ? $data['vaultHostNum'] : null;
        $this->container['raspHostNum'] = isset($data['raspHostNum']) ? $data['raspHostNum'] : null;
        $this->container['wtpHostNum'] = isset($data['wtpHostNum']) ? $data['wtpHostNum'] : null;
        $this->container['twoFactorHostNum'] = isset($data['twoFactorHostNum']) ? $data['twoFactorHostNum'] : null;
        $this->container['isolatedFileNum'] = isset($data['isolatedFileNum']) ? $data['isolatedFileNum'] : null;
        $this->container['supportTwoFactorHostNum'] = isset($data['supportTwoFactorHostNum']) ? $data['supportTwoFactorHostNum'] : null;
        $this->container['appProcessHostNum'] = isset($data['appProcessHostNum']) ? $data['appProcessHostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vaultHostNum']) && ($this->container['vaultHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vaultHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vaultHostNum']) && ($this->container['vaultHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vaultHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['raspHostNum']) && ($this->container['raspHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'raspHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['raspHostNum']) && ($this->container['raspHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'raspHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['wtpHostNum']) && ($this->container['wtpHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'wtpHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['wtpHostNum']) && ($this->container['wtpHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'wtpHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['twoFactorHostNum']) && ($this->container['twoFactorHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'twoFactorHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['twoFactorHostNum']) && ($this->container['twoFactorHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'twoFactorHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isolatedFileNum']) && ($this->container['isolatedFileNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'isolatedFileNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['isolatedFileNum']) && ($this->container['isolatedFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'isolatedFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['supportTwoFactorHostNum']) && ($this->container['supportTwoFactorHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'supportTwoFactorHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['supportTwoFactorHostNum']) && ($this->container['supportTwoFactorHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'supportTwoFactorHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appProcessHostNum']) && ($this->container['appProcessHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'appProcessHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['appProcessHostNum']) && ($this->container['appProcessHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'appProcessHostNum', must be bigger than or equal to 0.";
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
    * Gets vaultHostNum
    *  **参数解释**: 勒索病毒防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVaultHostNum()
    {
        return $this->container['vaultHostNum'];
    }

    /**
    * Sets vaultHostNum
    *
    * @param int|null $vaultHostNum **参数解释**: 勒索病毒防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVaultHostNum($vaultHostNum)
    {
        $this->container['vaultHostNum'] = $vaultHostNum;
        return $this;
    }

    /**
    * Gets raspHostNum
    *  **参数解释**: 应用防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRaspHostNum()
    {
        return $this->container['raspHostNum'];
    }

    /**
    * Sets raspHostNum
    *
    * @param int|null $raspHostNum **参数解释**: 应用防护开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRaspHostNum($raspHostNum)
    {
        $this->container['raspHostNum'] = $raspHostNum;
        return $this;
    }

    /**
    * Gets wtpHostNum
    *  **参数解释**: 网页防篡改开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getWtpHostNum()
    {
        return $this->container['wtpHostNum'];
    }

    /**
    * Sets wtpHostNum
    *
    * @param int|null $wtpHostNum **参数解释**: 网页防篡改开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setWtpHostNum($wtpHostNum)
    {
        $this->container['wtpHostNum'] = $wtpHostNum;
        return $this;
    }

    /**
    * Gets twoFactorHostNum
    *  **参数解释**: 双因子认证开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTwoFactorHostNum()
    {
        return $this->container['twoFactorHostNum'];
    }

    /**
    * Sets twoFactorHostNum
    *
    * @param int|null $twoFactorHostNum **参数解释**: 双因子认证开启主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTwoFactorHostNum($twoFactorHostNum)
    {
        $this->container['twoFactorHostNum'] = $twoFactorHostNum;
        return $this;
    }

    /**
    * Gets isolatedFileNum
    *  **参数解释**: 隔离文件数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getIsolatedFileNum()
    {
        return $this->container['isolatedFileNum'];
    }

    /**
    * Sets isolatedFileNum
    *
    * @param int|null $isolatedFileNum **参数解释**: 隔离文件数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setIsolatedFileNum($isolatedFileNum)
    {
        $this->container['isolatedFileNum'] = $isolatedFileNum;
        return $this;
    }

    /**
    * Gets supportTwoFactorHostNum
    *  **参数解释**: 支持开启双因子的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSupportTwoFactorHostNum()
    {
        return $this->container['supportTwoFactorHostNum'];
    }

    /**
    * Sets supportTwoFactorHostNum
    *
    * @param int|null $supportTwoFactorHostNum **参数解释**: 支持开启双因子的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSupportTwoFactorHostNum($supportTwoFactorHostNum)
    {
        $this->container['supportTwoFactorHostNum'] = $supportTwoFactorHostNum;
        return $this;
    }

    /**
    * Gets appProcessHostNum
    *  **参数解释**: 开启应用进程的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAppProcessHostNum()
    {
        return $this->container['appProcessHostNum'];
    }

    /**
    * Sets appProcessHostNum
    *
    * @param int|null $appProcessHostNum **参数解释**: 开启应用进程的主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAppProcessHostNum($appProcessHostNum)
    {
        $this->container['appProcessHostNum'] = $appProcessHostNum;
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

