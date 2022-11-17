<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateApplicationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateApplicationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用名。  最大支持64个字符，只能包含英文字母、下划线和数字。
    * platform  应用平台。  目前仅支持HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。
    * platformPrincipal  对于HMS平台是APP ID，只能包含英文字母和数字，最大20个字符。 对于苹果APNS、APNS_SandBox平台是推送证书，大小不超过8K，且是Base64编码。
    * platformCredential  对于HMS平台是APP SECRET， 只能包含英文字母和数字，32到64个字符。  对于苹果APNS、APNS_SandBox平台是推送证书的私钥（private key）， 大小不超过8K，且是Base64编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'platform' => 'string',
            'platformPrincipal' => 'string',
            'platformCredential' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用名。  最大支持64个字符，只能包含英文字母、下划线和数字。
    * platform  应用平台。  目前仅支持HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。
    * platformPrincipal  对于HMS平台是APP ID，只能包含英文字母和数字，最大20个字符。 对于苹果APNS、APNS_SandBox平台是推送证书，大小不超过8K，且是Base64编码。
    * platformCredential  对于HMS平台是APP SECRET， 只能包含英文字母和数字，32到64个字符。  对于苹果APNS、APNS_SandBox平台是推送证书的私钥（private key）， 大小不超过8K，且是Base64编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'platform' => null,
        'platformPrincipal' => null,
        'platformCredential' => null
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
    * name  应用名。  最大支持64个字符，只能包含英文字母、下划线和数字。
    * platform  应用平台。  目前仅支持HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。
    * platformPrincipal  对于HMS平台是APP ID，只能包含英文字母和数字，最大20个字符。 对于苹果APNS、APNS_SandBox平台是推送证书，大小不超过8K，且是Base64编码。
    * platformCredential  对于HMS平台是APP SECRET， 只能包含英文字母和数字，32到64个字符。  对于苹果APNS、APNS_SandBox平台是推送证书的私钥（private key）， 大小不超过8K，且是Base64编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'platform' => 'platform',
            'platformPrincipal' => 'platform_principal',
            'platformCredential' => 'platform_credential'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用名。  最大支持64个字符，只能包含英文字母、下划线和数字。
    * platform  应用平台。  目前仅支持HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。
    * platformPrincipal  对于HMS平台是APP ID，只能包含英文字母和数字，最大20个字符。 对于苹果APNS、APNS_SandBox平台是推送证书，大小不超过8K，且是Base64编码。
    * platformCredential  对于HMS平台是APP SECRET， 只能包含英文字母和数字，32到64个字符。  对于苹果APNS、APNS_SandBox平台是推送证书的私钥（private key）， 大小不超过8K，且是Base64编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'platform' => 'setPlatform',
            'platformPrincipal' => 'setPlatformPrincipal',
            'platformCredential' => 'setPlatformCredential'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用名。  最大支持64个字符，只能包含英文字母、下划线和数字。
    * platform  应用平台。  目前仅支持HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。
    * platformPrincipal  对于HMS平台是APP ID，只能包含英文字母和数字，最大20个字符。 对于苹果APNS、APNS_SandBox平台是推送证书，大小不超过8K，且是Base64编码。
    * platformCredential  对于HMS平台是APP SECRET， 只能包含英文字母和数字，32到64个字符。  对于苹果APNS、APNS_SandBox平台是推送证书的私钥（private key）， 大小不超过8K，且是Base64编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'platform' => 'getPlatform',
            'platformPrincipal' => 'getPlatformPrincipal',
            'platformCredential' => 'getPlatformCredential'
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
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['platformPrincipal'] = isset($data['platformPrincipal']) ? $data['platformPrincipal'] : null;
        $this->container['platformCredential'] = isset($data['platformCredential']) ? $data['platformCredential'] : null;
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
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        if ($this->container['platformPrincipal'] === null) {
            $invalidProperties[] = "'platformPrincipal' can't be null";
        }
        if ($this->container['platformCredential'] === null) {
            $invalidProperties[] = "'platformCredential' can't be null";
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
    *  应用名。  最大支持64个字符，只能包含英文字母、下划线和数字。
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
    * @param string $name 应用名。  最大支持64个字符，只能包含英文字母、下划线和数字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets platform
    *  应用平台。  目前仅支持HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。
    *
    * @return string
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string $platform 应用平台。  目前仅支持HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets platformPrincipal
    *  对于HMS平台是APP ID，只能包含英文字母和数字，最大20个字符。 对于苹果APNS、APNS_SandBox平台是推送证书，大小不超过8K，且是Base64编码。
    *
    * @return string
    */
    public function getPlatformPrincipal()
    {
        return $this->container['platformPrincipal'];
    }

    /**
    * Sets platformPrincipal
    *
    * @param string $platformPrincipal 对于HMS平台是APP ID，只能包含英文字母和数字，最大20个字符。 对于苹果APNS、APNS_SandBox平台是推送证书，大小不超过8K，且是Base64编码。
    *
    * @return $this
    */
    public function setPlatformPrincipal($platformPrincipal)
    {
        $this->container['platformPrincipal'] = $platformPrincipal;
        return $this;
    }

    /**
    * Gets platformCredential
    *  对于HMS平台是APP SECRET， 只能包含英文字母和数字，32到64个字符。  对于苹果APNS、APNS_SandBox平台是推送证书的私钥（private key）， 大小不超过8K，且是Base64编码。
    *
    * @return string
    */
    public function getPlatformCredential()
    {
        return $this->container['platformCredential'];
    }

    /**
    * Sets platformCredential
    *
    * @param string $platformCredential 对于HMS平台是APP SECRET， 只能包含英文字母和数字，32到64个字符。  对于苹果APNS、APNS_SandBox平台是推送证书的私钥（private key）， 大小不超过8K，且是Base64编码。
    *
    * @return $this
    */
    public function setPlatformCredential($platformCredential)
    {
        $this->container['platformCredential'] = $platformCredential;
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

