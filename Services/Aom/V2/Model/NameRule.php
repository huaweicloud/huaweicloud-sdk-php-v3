<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NameRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NameRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appNameRule  服务命名部分，数组中有多个对象时表示将每个对象抽取到的字符串拼接作为服务的名称。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为[\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时,args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时,args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，服务名称为ser。
    * applicationNameRule  应用命名部分。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为 [\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时，args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时，args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，应用名称为ser。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appNameRule' => '\HuaweiCloud\SDK\Aom\V2\Model\AppNameRule[]',
            'applicationNameRule' => '\HuaweiCloud\SDK\Aom\V2\Model\ApplicationNameRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appNameRule  服务命名部分，数组中有多个对象时表示将每个对象抽取到的字符串拼接作为服务的名称。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为[\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时,args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时,args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，服务名称为ser。
    * applicationNameRule  应用命名部分。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为 [\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时，args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时，args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，应用名称为ser。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appNameRule' => null,
        'applicationNameRule' => null
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
    * appNameRule  服务命名部分，数组中有多个对象时表示将每个对象抽取到的字符串拼接作为服务的名称。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为[\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时,args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时,args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，服务名称为ser。
    * applicationNameRule  应用命名部分。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为 [\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时，args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时，args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，应用名称为ser。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appNameRule' => 'appNameRule',
            'applicationNameRule' => 'applicationNameRule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appNameRule  服务命名部分，数组中有多个对象时表示将每个对象抽取到的字符串拼接作为服务的名称。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为[\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时,args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时,args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，服务名称为ser。
    * applicationNameRule  应用命名部分。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为 [\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时，args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时，args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，应用名称为ser。
    *
    * @var string[]
    */
    protected static $setters = [
            'appNameRule' => 'setAppNameRule',
            'applicationNameRule' => 'setApplicationNameRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appNameRule  服务命名部分，数组中有多个对象时表示将每个对象抽取到的字符串拼接作为服务的名称。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为[\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时,args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时,args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，服务名称为ser。
    * applicationNameRule  应用命名部分。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为 [\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时，args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时，args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，应用名称为ser。
    *
    * @var string[]
    */
    protected static $getters = [
            'appNameRule' => 'getAppNameRule',
            'applicationNameRule' => 'getApplicationNameRule'
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
        $this->container['appNameRule'] = isset($data['appNameRule']) ? $data['appNameRule'] : null;
        $this->container['applicationNameRule'] = isset($data['applicationNameRule']) ? $data['applicationNameRule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appNameRule'] === null) {
            $invalidProperties[] = "'appNameRule' can't be null";
        }
        if ($this->container['applicationNameRule'] === null) {
            $invalidProperties[] = "'applicationNameRule' can't be null";
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
    * Gets appNameRule
    *  服务命名部分，数组中有多个对象时表示将每个对象抽取到的字符串拼接作为服务的名称。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为[\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时,args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时,args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，服务名称为ser。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AppNameRule[]
    */
    public function getAppNameRule()
    {
        return $this->container['appNameRule'];
    }

    /**
    * Sets appNameRule
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AppNameRule[] $appNameRule 服务命名部分，数组中有多个对象时表示将每个对象抽取到的字符串拼接作为服务的名称。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为[\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时,args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时,args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，服务名称为ser。
    *
    * @return $this
    */
    public function setAppNameRule($appNameRule)
    {
        $this->container['appNameRule'] = $appNameRule;
        return $this;
    }

    /**
    * Gets applicationNameRule
    *  应用命名部分。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为 [\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时，args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时，args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，应用名称为ser。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\ApplicationNameRule[]
    */
    public function getApplicationNameRule()
    {
        return $this->container['applicationNameRule'];
    }

    /**
    * Sets applicationNameRule
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\ApplicationNameRule[] $applicationNameRule 应用命名部分。 nameType取值cmdLine时args格式为[\"start\",\"end\"]，表示抽取命令行中start、end之间的字符。 nameType取值cmdLine时args格式为 [\"aa\"]，表示抽取环境变量名为aa对应的环境变量值。 nameType取值str时，args格式为[\"fix\"]，表示服务名称最后拼接固定文字fix。 nameType取值cmdLineHash时，args格式为[\"0001\"]，value格式为[\"ser\"]，表示当启动命令是0001时，应用名称为ser。
    *
    * @return $this
    */
    public function setApplicationNameRule($applicationNameRule)
    {
        $this->container['applicationNameRule'] = $applicationNameRule;
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

