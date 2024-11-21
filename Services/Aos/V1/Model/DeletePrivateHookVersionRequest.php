<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeletePrivateHookVersionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeletePrivateHookVersionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一Id，用于定位某个请求，推荐使用UUID
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientRequestId' => 'string',
            'hookName' => 'string',
            'hookVersion' => 'string',
            'hookId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一Id，用于定位某个请求，推荐使用UUID
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientRequestId' => null,
        'hookName' => null,
        'hookVersion' => null,
        'hookId' => null
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
    * clientRequestId  用户指定的，对于此请求的唯一Id，用于定位某个请求，推荐使用UUID
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientRequestId' => 'Client-Request-Id',
            'hookName' => 'hook_name',
            'hookVersion' => 'hook_version',
            'hookId' => 'hook_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientRequestId  用户指定的，对于此请求的唯一Id，用于定位某个请求，推荐使用UUID
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientRequestId' => 'setClientRequestId',
            'hookName' => 'setHookName',
            'hookVersion' => 'setHookVersion',
            'hookId' => 'setHookId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientRequestId  用户指定的，对于此请求的唯一Id，用于定位某个请求，推荐使用UUID
    * hookName  私有hook的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。  推荐用户使用三段命名空间：{自定义hook名称}-{hook应用场景}-hook。
    * hookVersion  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    * hookId  私有hook（private-hook）的唯一Id。  此Id由资源编排服务在生成私有hook的时候生成，为UUID。  由于私有hook名称仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有hook，删除，再重新创建一个同名私有hook。  对于团队并行开发，用户可能希望确保，当前我操作的私有hook就是我认为的那个，而不是其他队友删除后创建的同名私有hook。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有hook所对应的Id都不相同，更新不会影响Id。如果给予的hook_id和当前hook的Id不一致，则返回400。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientRequestId' => 'getClientRequestId',
            'hookName' => 'getHookName',
            'hookVersion' => 'getHookVersion',
            'hookId' => 'getHookId'
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['hookName'] = isset($data['hookName']) ? $data['hookName'] : null;
        $this->container['hookVersion'] = isset($data['hookVersion']) ? $data['hookVersion'] : null;
        $this->container['hookId'] = isset($data['hookId']) ? $data['hookId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clientRequestId'] === null) {
            $invalidProperties[] = "'clientRequestId' can't be null";
        }
            if ((mb_strlen($this->container['clientRequestId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clientRequestId']) < 36)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^[A-Za-z0-9]+[A-Za-z0-9-]*$/", $this->container['clientRequestId'])) {
                $invalidProperties[] = "invalid value for 'clientRequestId', must be conform to the pattern /^[A-Za-z0-9]+[A-Za-z0-9-]*$/.";
            }
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
        if ($this->container['hookVersion'] === null) {
            $invalidProperties[] = "'hookVersion' can't be null";
        }
            if ((mb_strlen($this->container['hookVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'hookVersion', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hookVersion']) < 5)) {
                $invalidProperties[] = "invalid value for 'hookVersion', the character length must be bigger than or equal to 5.";
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
    * Gets clientRequestId
    *  用户指定的，对于此请求的唯一Id，用于定位某个请求，推荐使用UUID
    *
    * @return string
    */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
    * Sets clientRequestId
    *
    * @param string $clientRequestId 用户指定的，对于此请求的唯一Id，用于定位某个请求，推荐使用UUID
    *
    * @return $this
    */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;
        return $this;
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
    * Gets hookVersion
    *  私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    *
    * @return string
    */
    public function getHookVersion()
    {
        return $this->container['hookVersion'];
    }

    /**
    * Sets hookVersion
    *
    * @param string $hookVersion 私有hook的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义。
    *
    * @return $this
    */
    public function setHookVersion($hookVersion)
    {
        $this->container['hookVersion'] = $hookVersion;
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

