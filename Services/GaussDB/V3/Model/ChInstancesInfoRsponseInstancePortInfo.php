<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChInstancesInfoRsponseInstancePortInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChInstancesInfoRsponse_instance_port_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tepPort  tep端口。取值范围：0~65535。
    * httpPort  http端口。取值范围：0~65535。
    * mysqlPort  MySql端口号。取值范围：0~65535。
    * httpsPort  https端口号。取值范围：0~65535。
    * tepSecurePort  tep安全端口。取值范围：0~65535。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tepPort' => 'int',
            'httpPort' => 'int',
            'mysqlPort' => 'int',
            'httpsPort' => 'int',
            'tepSecurePort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tepPort  tep端口。取值范围：0~65535。
    * httpPort  http端口。取值范围：0~65535。
    * mysqlPort  MySql端口号。取值范围：0~65535。
    * httpsPort  https端口号。取值范围：0~65535。
    * tepSecurePort  tep安全端口。取值范围：0~65535。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tepPort' => 'int32',
        'httpPort' => 'int32',
        'mysqlPort' => 'int32',
        'httpsPort' => 'int32',
        'tepSecurePort' => 'int32'
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
    * tepPort  tep端口。取值范围：0~65535。
    * httpPort  http端口。取值范围：0~65535。
    * mysqlPort  MySql端口号。取值范围：0~65535。
    * httpsPort  https端口号。取值范围：0~65535。
    * tepSecurePort  tep安全端口。取值范围：0~65535。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tepPort' => 'tep_port',
            'httpPort' => 'http_port',
            'mysqlPort' => 'mysql_port',
            'httpsPort' => 'https_port',
            'tepSecurePort' => 'tep_secure_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tepPort  tep端口。取值范围：0~65535。
    * httpPort  http端口。取值范围：0~65535。
    * mysqlPort  MySql端口号。取值范围：0~65535。
    * httpsPort  https端口号。取值范围：0~65535。
    * tepSecurePort  tep安全端口。取值范围：0~65535。
    *
    * @var string[]
    */
    protected static $setters = [
            'tepPort' => 'setTepPort',
            'httpPort' => 'setHttpPort',
            'mysqlPort' => 'setMysqlPort',
            'httpsPort' => 'setHttpsPort',
            'tepSecurePort' => 'setTepSecurePort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tepPort  tep端口。取值范围：0~65535。
    * httpPort  http端口。取值范围：0~65535。
    * mysqlPort  MySql端口号。取值范围：0~65535。
    * httpsPort  https端口号。取值范围：0~65535。
    * tepSecurePort  tep安全端口。取值范围：0~65535。
    *
    * @var string[]
    */
    protected static $getters = [
            'tepPort' => 'getTepPort',
            'httpPort' => 'getHttpPort',
            'mysqlPort' => 'getMysqlPort',
            'httpsPort' => 'getHttpsPort',
            'tepSecurePort' => 'getTepSecurePort'
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
        $this->container['tepPort'] = isset($data['tepPort']) ? $data['tepPort'] : null;
        $this->container['httpPort'] = isset($data['httpPort']) ? $data['httpPort'] : null;
        $this->container['mysqlPort'] = isset($data['mysqlPort']) ? $data['mysqlPort'] : null;
        $this->container['httpsPort'] = isset($data['httpsPort']) ? $data['httpsPort'] : null;
        $this->container['tepSecurePort'] = isset($data['tepSecurePort']) ? $data['tepSecurePort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tepPort'] === null) {
            $invalidProperties[] = "'tepPort' can't be null";
        }
        if ($this->container['httpPort'] === null) {
            $invalidProperties[] = "'httpPort' can't be null";
        }
        if ($this->container['mysqlPort'] === null) {
            $invalidProperties[] = "'mysqlPort' can't be null";
        }
        if ($this->container['httpsPort'] === null) {
            $invalidProperties[] = "'httpsPort' can't be null";
        }
        if ($this->container['tepSecurePort'] === null) {
            $invalidProperties[] = "'tepSecurePort' can't be null";
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
    * Gets tepPort
    *  tep端口。取值范围：0~65535。
    *
    * @return int
    */
    public function getTepPort()
    {
        return $this->container['tepPort'];
    }

    /**
    * Sets tepPort
    *
    * @param int $tepPort tep端口。取值范围：0~65535。
    *
    * @return $this
    */
    public function setTepPort($tepPort)
    {
        $this->container['tepPort'] = $tepPort;
        return $this;
    }

    /**
    * Gets httpPort
    *  http端口。取值范围：0~65535。
    *
    * @return int
    */
    public function getHttpPort()
    {
        return $this->container['httpPort'];
    }

    /**
    * Sets httpPort
    *
    * @param int $httpPort http端口。取值范围：0~65535。
    *
    * @return $this
    */
    public function setHttpPort($httpPort)
    {
        $this->container['httpPort'] = $httpPort;
        return $this;
    }

    /**
    * Gets mysqlPort
    *  MySql端口号。取值范围：0~65535。
    *
    * @return int
    */
    public function getMysqlPort()
    {
        return $this->container['mysqlPort'];
    }

    /**
    * Sets mysqlPort
    *
    * @param int $mysqlPort MySql端口号。取值范围：0~65535。
    *
    * @return $this
    */
    public function setMysqlPort($mysqlPort)
    {
        $this->container['mysqlPort'] = $mysqlPort;
        return $this;
    }

    /**
    * Gets httpsPort
    *  https端口号。取值范围：0~65535。
    *
    * @return int
    */
    public function getHttpsPort()
    {
        return $this->container['httpsPort'];
    }

    /**
    * Sets httpsPort
    *
    * @param int $httpsPort https端口号。取值范围：0~65535。
    *
    * @return $this
    */
    public function setHttpsPort($httpsPort)
    {
        $this->container['httpsPort'] = $httpsPort;
        return $this;
    }

    /**
    * Gets tepSecurePort
    *  tep安全端口。取值范围：0~65535。
    *
    * @return int
    */
    public function getTepSecurePort()
    {
        return $this->container['tepSecurePort'];
    }

    /**
    * Sets tepSecurePort
    *
    * @param int $tepSecurePort tep安全端口。取值范围：0~65535。
    *
    * @return $this
    */
    public function setTepSecurePort($tepSecurePort)
    {
        $this->container['tepSecurePort'] = $tepSecurePort;
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

