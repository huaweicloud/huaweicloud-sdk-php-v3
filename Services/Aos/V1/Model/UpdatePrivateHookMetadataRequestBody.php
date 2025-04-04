<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePrivateHookMetadataRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePrivateHookMetadataRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * defaultVersion  私有hook的默认版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * configuration  configuration
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hookDescription' => 'string',
            'hookId' => 'string',
            'defaultVersion' => 'string',
            'configuration' => '\HuaweiCloud\SDK\Aos\V1\Model\ConfigurationPrimitiveTypeHolderConfiguration'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * defaultVersion  私有hook的默认版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * configuration  configuration
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hookDescription' => null,
        'hookId' => null,
        'defaultVersion' => null,
        'configuration' => null
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
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * defaultVersion  私有hook的默认版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * configuration  configuration
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hookDescription' => 'hook_description',
            'hookId' => 'hook_id',
            'defaultVersion' => 'default_version',
            'configuration' => 'configuration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * defaultVersion  私有hook的默认版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * configuration  configuration
    *
    * @var string[]
    */
    protected static $setters = [
            'hookDescription' => 'setHookDescription',
            'hookId' => 'setHookId',
            'defaultVersion' => 'setDefaultVersion',
            'configuration' => 'setConfiguration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hookDescription  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    * defaultVersion  私有hook的默认版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * configuration  configuration
    *
    * @var string[]
    */
    protected static $getters = [
            'hookDescription' => 'getHookDescription',
            'hookId' => 'getHookId',
            'defaultVersion' => 'getDefaultVersion',
            'configuration' => 'getConfiguration'
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
        $this->container['hookDescription'] = isset($data['hookDescription']) ? $data['hookDescription'] : null;
        $this->container['hookId'] = isset($data['hookId']) ? $data['hookId'] : null;
        $this->container['defaultVersion'] = isset($data['defaultVersion']) ? $data['defaultVersion'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hookDescription']) && (mb_strlen($this->container['hookDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'hookDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['hookDescription']) && (mb_strlen($this->container['hookDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'hookDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hookId']) && (mb_strlen($this->container['hookId']) > 36)) {
                $invalidProperties[] = "invalid value for 'hookId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['hookId']) && (mb_strlen($this->container['hookId']) < 36)) {
                $invalidProperties[] = "invalid value for 'hookId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['hookId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['hookId'])) {
                $invalidProperties[] = "invalid value for 'hookId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
            if (!is_null($this->container['defaultVersion']) && (mb_strlen($this->container['defaultVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'defaultVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['defaultVersion']) && (mb_strlen($this->container['defaultVersion']) < 5)) {
                $invalidProperties[] = "invalid value for 'defaultVersion', the character length must be bigger than or equal to 5.";
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
    * Gets hookDescription
    *  私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    *
    * @return string|null
    */
    public function getHookDescription()
    {
        return $this->container['hookDescription'];
    }

    /**
    * Sets hookDescription
    *
    * @param string|null $hookDescription 私有hook的描述。可用于客户识别创建的私有hook。可通过UpdatePrivateHook API更新私有hook的描述。
    *
    * @return $this
    */
    public function setHookDescription($hookDescription)
    {
        $this->container['hookDescription'] = $hookDescription;
        return $this;
    }

    /**
    * Gets hookId
    *  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @return string|null
    */
    public function getHookId()
    {
        return $this->container['hookId'];
    }

    /**
    * Sets hookId
    *
    * @param string|null $hookId 私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @return $this
    */
    public function setHookId($hookId)
    {
        $this->container['hookId'] = $hookId;
        return $this;
    }

    /**
    * Gets defaultVersion
    *  私有hook的默认版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    *
    * @return string|null
    */
    public function getDefaultVersion()
    {
        return $this->container['defaultVersion'];
    }

    /**
    * Sets defaultVersion
    *
    * @param string|null $defaultVersion 私有hook的默认版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    *
    * @return $this
    */
    public function setDefaultVersion($defaultVersion)
    {
        $this->container['defaultVersion'] = $defaultVersion;
        return $this;
    }

    /**
    * Gets configuration
    *  configuration
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\ConfigurationPrimitiveTypeHolderConfiguration|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\ConfigurationPrimitiveTypeHolderConfiguration|null $configuration configuration
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
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

