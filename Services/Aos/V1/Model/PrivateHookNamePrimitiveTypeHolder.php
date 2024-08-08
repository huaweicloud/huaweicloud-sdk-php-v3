<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateHookNamePrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateHookNamePrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hookName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hookName' => null
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
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hookName' => 'hook_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @var string[]
    */
    protected static $setters = [
            'hookName' => 'setHookName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @var string[]
    */
    protected static $getters = [
            'hookName' => 'getHookName'
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
        $this->container['hookName'] = isset($data['hookName']) ? $data['hookName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hookName'] === null) {
            $invalidProperties[] = "'hookName' can't be null";
        }
            if ((mb_strlen($this->container['hookName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hookName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hookName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hookName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['hookName'])) {
                $invalidProperties[] = "invalid value for 'hookName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
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
    * Gets hookName
    *  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @return string
    */
    public function getHookName()
    {
        return $this->container['hookName'];
    }

    /**
    * Sets hookName
    *
    * @param string $hookName 私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    *
    * @return $this
    */
    public function setHookName($hookName)
    {
        $this->container['hookName'] = $hookName;
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

