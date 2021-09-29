<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateServersNameRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateServersNameRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  弹性云服务器修改后的名称。  规则如下：  只能允许包含中文汉字、大小写字母、数字及 \"-\" 、 \"_\" 、\".\" 等特殊字符，长度限制在64个字符以内。  批量修改弹性云服务器名称时，名不会自动按序增加数字尾缀。例如： 三个ECS的名称为test_0001，test_0002，test_0003，批量修改云服务器名称为develop，则修改后3个云服务器名称为develop，develop，develop。
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会修改云服务器名称。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回正常响应信息。 - false：发送正常请求，通过检查后并且执行修改云服务器名称的请求。  默认值：false
    * servers  待修改的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'dryRun' => 'bool',
            'servers' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerId[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  弹性云服务器修改后的名称。  规则如下：  只能允许包含中文汉字、大小写字母、数字及 \"-\" 、 \"_\" 、\".\" 等特殊字符，长度限制在64个字符以内。  批量修改弹性云服务器名称时，名不会自动按序增加数字尾缀。例如： 三个ECS的名称为test_0001，test_0002，test_0003，批量修改云服务器名称为develop，则修改后3个云服务器名称为develop，develop，develop。
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会修改云服务器名称。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回正常响应信息。 - false：发送正常请求，通过检查后并且执行修改云服务器名称的请求。  默认值：false
    * servers  待修改的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'dryRun' => null,
        'servers' => null
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
    * name  弹性云服务器修改后的名称。  规则如下：  只能允许包含中文汉字、大小写字母、数字及 \"-\" 、 \"_\" 、\".\" 等特殊字符，长度限制在64个字符以内。  批量修改弹性云服务器名称时，名不会自动按序增加数字尾缀。例如： 三个ECS的名称为test_0001，test_0002，test_0003，批量修改云服务器名称为develop，则修改后3个云服务器名称为develop，develop，develop。
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会修改云服务器名称。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回正常响应信息。 - false：发送正常请求，通过检查后并且执行修改云服务器名称的请求。  默认值：false
    * servers  待修改的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'dryRun' => 'dry_run',
            'servers' => 'servers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  弹性云服务器修改后的名称。  规则如下：  只能允许包含中文汉字、大小写字母、数字及 \"-\" 、 \"_\" 、\".\" 等特殊字符，长度限制在64个字符以内。  批量修改弹性云服务器名称时，名不会自动按序增加数字尾缀。例如： 三个ECS的名称为test_0001，test_0002，test_0003，批量修改云服务器名称为develop，则修改后3个云服务器名称为develop，develop，develop。
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会修改云服务器名称。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回正常响应信息。 - false：发送正常请求，通过检查后并且执行修改云服务器名称的请求。  默认值：false
    * servers  待修改的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'dryRun' => 'setDryRun',
            'servers' => 'setServers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  弹性云服务器修改后的名称。  规则如下：  只能允许包含中文汉字、大小写字母、数字及 \"-\" 、 \"_\" 、\".\" 等特殊字符，长度限制在64个字符以内。  批量修改弹性云服务器名称时，名不会自动按序增加数字尾缀。例如： 三个ECS的名称为test_0001，test_0002，test_0003，批量修改云服务器名称为develop，则修改后3个云服务器名称为develop，develop，develop。
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会修改云服务器名称。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回正常响应信息。 - false：发送正常请求，通过检查后并且执行修改云服务器名称的请求。  默认值：false
    * servers  待修改的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'dryRun' => 'getDryRun',
            'servers' => 'getServers'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['servers'] === null) {
            $invalidProperties[] = "'servers' can't be null";
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
    * Gets name
    *  弹性云服务器修改后的名称。  规则如下：  只能允许包含中文汉字、大小写字母、数字及 \"-\" 、 \"_\" 、\".\" 等特殊字符，长度限制在64个字符以内。  批量修改弹性云服务器名称时，名不会自动按序增加数字尾缀。例如： 三个ECS的名称为test_0001，test_0002，test_0003，批量修改云服务器名称为develop，则修改后3个云服务器名称为develop，develop，develop。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 弹性云服务器修改后的名称。  规则如下：  只能允许包含中文汉字、大小写字母、数字及 \"-\" 、 \"_\" 、\".\" 等特殊字符，长度限制在64个字符以内。  批量修改弹性云服务器名称时，名不会自动按序增加数字尾缀。例如： 三个ECS的名称为test_0001，test_0002，test_0003，批量修改云服务器名称为develop，则修改后3个云服务器名称为develop，develop，develop。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dryRun
    *  是否只预检此次请求。  - true：发送检查请求，不会修改云服务器名称。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回正常响应信息。 - false：发送正常请求，通过检查后并且执行修改云服务器名称的请求。  默认值：false
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 是否只预检此次请求。  - true：发送检查请求，不会修改云服务器名称。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回正常响应信息。 - false：发送正常请求，通过检查后并且执行修改云服务器名称的请求。  默认值：false
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets servers
    *  待修改的弹性云服务器ID信息。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerId[]
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerId[] $servers 待修改的弹性云服务器ID信息。
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
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

