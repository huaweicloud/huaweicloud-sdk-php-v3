<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RewriteUrlConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RewriteUrlConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * host  参数解释：重定向的域名。  取值范围：英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被重写请求host保持一致）。
    * path  参数解释：重定向的请求路径。其中$1-$9会匹配请求url通配符星号(*)，当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字、_~';@^-%#&$.+?,=!:|/()，且必须以\"/\"开头。  默认取值：${path}，表示继承原值（即与被重写请求保持一致）。
    * query  参数解释：重定向的查询字符串。其中$1-$9会匹配请求url通配符星号（*），当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字和特殊字符：!$&'()+,-./:;=?@^_`。字母区分大小写。  默认取值：${query}，表示继承原值（即与被重写请求保持一致）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'host' => 'string',
            'path' => 'string',
            'query' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * host  参数解释：重定向的域名。  取值范围：英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被重写请求host保持一致）。
    * path  参数解释：重定向的请求路径。其中$1-$9会匹配请求url通配符星号(*)，当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字、_~';@^-%#&$.+?,=!:|/()，且必须以\"/\"开头。  默认取值：${path}，表示继承原值（即与被重写请求保持一致）。
    * query  参数解释：重定向的查询字符串。其中$1-$9会匹配请求url通配符星号（*），当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字和特殊字符：!$&'()+,-./:;=?@^_`。字母区分大小写。  默认取值：${query}，表示继承原值（即与被重写请求保持一致）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'host' => null,
        'path' => null,
        'query' => null
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
    * host  参数解释：重定向的域名。  取值范围：英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被重写请求host保持一致）。
    * path  参数解释：重定向的请求路径。其中$1-$9会匹配请求url通配符星号(*)，当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字、_~';@^-%#&$.+?,=!:|/()，且必须以\"/\"开头。  默认取值：${path}，表示继承原值（即与被重写请求保持一致）。
    * query  参数解释：重定向的查询字符串。其中$1-$9会匹配请求url通配符星号（*），当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字和特殊字符：!$&'()+,-./:;=?@^_`。字母区分大小写。  默认取值：${query}，表示继承原值（即与被重写请求保持一致）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'host' => 'host',
            'path' => 'path',
            'query' => 'query'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * host  参数解释：重定向的域名。  取值范围：英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被重写请求host保持一致）。
    * path  参数解释：重定向的请求路径。其中$1-$9会匹配请求url通配符星号(*)，当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字、_~';@^-%#&$.+?,=!:|/()，且必须以\"/\"开头。  默认取值：${path}，表示继承原值（即与被重写请求保持一致）。
    * query  参数解释：重定向的查询字符串。其中$1-$9会匹配请求url通配符星号（*），当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字和特殊字符：!$&'()+,-./:;=?@^_`。字母区分大小写。  默认取值：${query}，表示继承原值（即与被重写请求保持一致）。
    *
    * @var string[]
    */
    protected static $setters = [
            'host' => 'setHost',
            'path' => 'setPath',
            'query' => 'setQuery'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * host  参数解释：重定向的域名。  取值范围：英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被重写请求host保持一致）。
    * path  参数解释：重定向的请求路径。其中$1-$9会匹配请求url通配符星号(*)，当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字、_~';@^-%#&$.+?,=!:|/()，且必须以\"/\"开头。  默认取值：${path}，表示继承原值（即与被重写请求保持一致）。
    * query  参数解释：重定向的查询字符串。其中$1-$9会匹配请求url通配符星号（*），当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字和特殊字符：!$&'()+,-./:;=?@^_`。字母区分大小写。  默认取值：${query}，表示继承原值（即与被重写请求保持一致）。
    *
    * @var string[]
    */
    protected static $getters = [
            'host' => 'getHost',
            'path' => 'getPath',
            'query' => 'getQuery'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets host
    *  参数解释：重定向的域名。  取值范围：英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被重写请求host保持一致）。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 参数解释：重定向的域名。  取值范围：英文字母、数字、“-”、“.”，必须以字母、数字开头。  默认取值：${host}，表示继承原值（即与被重写请求host保持一致）。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets path
    *  参数解释：重定向的请求路径。其中$1-$9会匹配请求url通配符星号(*)，当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字、_~';@^-%#&$.+?,=!:|/()，且必须以\"/\"开头。  默认取值：${path}，表示继承原值（即与被重写请求保持一致）。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 参数解释：重定向的请求路径。其中$1-$9会匹配请求url通配符星号(*)，当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字、_~';@^-%#&$.+?,=!:|/()，且必须以\"/\"开头。  默认取值：${path}，表示继承原值（即与被重写请求保持一致）。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets query
    *  参数解释：重定向的查询字符串。其中$1-$9会匹配请求url通配符星号（*），当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字和特殊字符：!$&'()+,-./:;=?@^_`。字母区分大小写。  默认取值：${query}，表示继承原值（即与被重写请求保持一致）。
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 参数解释：重定向的查询字符串。其中$1-$9会匹配请求url通配符星号（*），当正则匹配分组小于指定数字，则$指定数字结果为空。$后面跟字母，匹配结果均为空，直到下一个特殊字符出现，例如$abc#123，则匹配结果为#123；$后面跟特殊字符则直接输出特殊字符，例如$#匹配结果为$#。  取值范围：英文字母、数字和特殊字符：!$&'()+,-./:;=?@^_`。字母区分大小写。  默认取值：${query}，表示继承原值（即与被重写请求保持一致）。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
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

