<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModVmrDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModVmrDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vmrName  云会议室名称。
    * gustPwd  来宾密码，设置为空字符串代表不设置来宾密码。 4~16位的数字
    * chairPwd  主持人密码。4~16位的数字。
    * allowGustFirst  是否允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vmrName' => 'string',
            'gustPwd' => 'string',
            'chairPwd' => 'string',
            'allowGustFirst' => 'bool',
            'gustFirstNotice' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vmrName  云会议室名称。
    * gustPwd  来宾密码，设置为空字符串代表不设置来宾密码。 4~16位的数字
    * chairPwd  主持人密码。4~16位的数字。
    * allowGustFirst  是否允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vmrName' => null,
        'gustPwd' => null,
        'chairPwd' => null,
        'allowGustFirst' => null,
        'gustFirstNotice' => null
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
    * vmrName  云会议室名称。
    * gustPwd  来宾密码，设置为空字符串代表不设置来宾密码。 4~16位的数字
    * chairPwd  主持人密码。4~16位的数字。
    * allowGustFirst  是否允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vmrName' => 'vmrName',
            'gustPwd' => 'gustPwd',
            'chairPwd' => 'chairPwd',
            'allowGustFirst' => 'allowGustFirst',
            'gustFirstNotice' => 'gustFirstNotice'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vmrName  云会议室名称。
    * gustPwd  来宾密码，设置为空字符串代表不设置来宾密码。 4~16位的数字
    * chairPwd  主持人密码。4~16位的数字。
    * allowGustFirst  是否允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    *
    * @var string[]
    */
    protected static $setters = [
            'vmrName' => 'setVmrName',
            'gustPwd' => 'setGustPwd',
            'chairPwd' => 'setChairPwd',
            'allowGustFirst' => 'setAllowGustFirst',
            'gustFirstNotice' => 'setGustFirstNotice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vmrName  云会议室名称。
    * gustPwd  来宾密码，设置为空字符串代表不设置来宾密码。 4~16位的数字
    * chairPwd  主持人密码。4~16位的数字。
    * allowGustFirst  是否允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    *
    * @var string[]
    */
    protected static $getters = [
            'vmrName' => 'getVmrName',
            'gustPwd' => 'getGustPwd',
            'chairPwd' => 'getChairPwd',
            'allowGustFirst' => 'getAllowGustFirst',
            'gustFirstNotice' => 'getGustFirstNotice'
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
        $this->container['vmrName'] = isset($data['vmrName']) ? $data['vmrName'] : null;
        $this->container['gustPwd'] = isset($data['gustPwd']) ? $data['gustPwd'] : null;
        $this->container['chairPwd'] = isset($data['chairPwd']) ? $data['chairPwd'] : null;
        $this->container['allowGustFirst'] = isset($data['allowGustFirst']) ? $data['allowGustFirst'] : null;
        $this->container['gustFirstNotice'] = isset($data['gustFirstNotice']) ? $data['gustFirstNotice'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vmrName']) && (mb_strlen($this->container['vmrName']) > 128)) {
                $invalidProperties[] = "invalid value for 'vmrName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vmrName']) && (mb_strlen($this->container['vmrName']) < 1)) {
                $invalidProperties[] = "invalid value for 'vmrName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['gustPwd']) && !preg_match("/(^$|^[0-9]{4,16}$)/", $this->container['gustPwd'])) {
                $invalidProperties[] = "invalid value for 'gustPwd', must be conform to the pattern /(^$|^[0-9]{4,16}$)/.";
            }
            if (!is_null($this->container['chairPwd']) && !preg_match("/^[0-9]{4,16}$/", $this->container['chairPwd'])) {
                $invalidProperties[] = "invalid value for 'chairPwd', must be conform to the pattern /^[0-9]{4,16}$/.";
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
    * Gets vmrName
    *  云会议室名称。
    *
    * @return string|null
    */
    public function getVmrName()
    {
        return $this->container['vmrName'];
    }

    /**
    * Sets vmrName
    *
    * @param string|null $vmrName 云会议室名称。
    *
    * @return $this
    */
    public function setVmrName($vmrName)
    {
        $this->container['vmrName'] = $vmrName;
        return $this;
    }

    /**
    * Gets gustPwd
    *  来宾密码，设置为空字符串代表不设置来宾密码。 4~16位的数字
    *
    * @return string|null
    */
    public function getGustPwd()
    {
        return $this->container['gustPwd'];
    }

    /**
    * Sets gustPwd
    *
    * @param string|null $gustPwd 来宾密码，设置为空字符串代表不设置来宾密码。 4~16位的数字
    *
    * @return $this
    */
    public function setGustPwd($gustPwd)
    {
        $this->container['gustPwd'] = $gustPwd;
        return $this;
    }

    /**
    * Gets chairPwd
    *  主持人密码。4~16位的数字。
    *
    * @return string|null
    */
    public function getChairPwd()
    {
        return $this->container['chairPwd'];
    }

    /**
    * Sets chairPwd
    *
    * @param string|null $chairPwd 主持人密码。4~16位的数字。
    *
    * @return $this
    */
    public function setChairPwd($chairPwd)
    {
        $this->container['chairPwd'] = $chairPwd;
        return $this;
    }

    /**
    * Gets allowGustFirst
    *  是否允许来宾先入会。
    *
    * @return bool|null
    */
    public function getAllowGustFirst()
    {
        return $this->container['allowGustFirst'];
    }

    /**
    * Sets allowGustFirst
    *
    * @param bool|null $allowGustFirst 是否允许来宾先入会。
    *
    * @return $this
    */
    public function setAllowGustFirst($allowGustFirst)
    {
        $this->container['allowGustFirst'] = $allowGustFirst;
        return $this;
    }

    /**
    * Gets gustFirstNotice
    *  云会议室被使用后是否通知会议室所有者。
    *
    * @return bool|null
    */
    public function getGustFirstNotice()
    {
        return $this->container['gustFirstNotice'];
    }

    /**
    * Sets gustFirstNotice
    *
    * @param bool|null $gustFirstNotice 云会议室被使用后是否通知会议室所有者。
    *
    * @return $this
    */
    public function setGustFirstNotice($gustFirstNotice)
    {
        $this->container['gustFirstNotice'] = $gustFirstNotice;
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

