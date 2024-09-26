<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlockPage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlockPage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * template  模板名称，默认页面请输入default，自定义告警页面时请输入custom，重定向请输入redirect
    * customPage  customPage
    * redirectUrl  “重定向”页面URL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'template' => 'string',
            'customPage' => '\HuaweiCloud\SDK\Waf\V1\Model\CustomPage',
            'redirectUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * template  模板名称，默认页面请输入default，自定义告警页面时请输入custom，重定向请输入redirect
    * customPage  customPage
    * redirectUrl  “重定向”页面URL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'template' => null,
        'customPage' => null,
        'redirectUrl' => null
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
    * template  模板名称，默认页面请输入default，自定义告警页面时请输入custom，重定向请输入redirect
    * customPage  customPage
    * redirectUrl  “重定向”页面URL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'template' => 'template',
            'customPage' => 'custom_page',
            'redirectUrl' => 'redirect_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * template  模板名称，默认页面请输入default，自定义告警页面时请输入custom，重定向请输入redirect
    * customPage  customPage
    * redirectUrl  “重定向”页面URL
    *
    * @var string[]
    */
    protected static $setters = [
            'template' => 'setTemplate',
            'customPage' => 'setCustomPage',
            'redirectUrl' => 'setRedirectUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * template  模板名称，默认页面请输入default，自定义告警页面时请输入custom，重定向请输入redirect
    * customPage  customPage
    * redirectUrl  “重定向”页面URL
    *
    * @var string[]
    */
    protected static $getters = [
            'template' => 'getTemplate',
            'customPage' => 'getCustomPage',
            'redirectUrl' => 'getRedirectUrl'
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
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['customPage'] = isset($data['customPage']) ? $data['customPage'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
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
    * Gets template
    *  模板名称，默认页面请输入default，自定义告警页面时请输入custom，重定向请输入redirect
    *
    * @return string
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string $template 模板名称，默认页面请输入default，自定义告警页面时请输入custom，重定向请输入redirect
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets customPage
    *  customPage
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CustomPage|null
    */
    public function getCustomPage()
    {
        return $this->container['customPage'];
    }

    /**
    * Sets customPage
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CustomPage|null $customPage customPage
    *
    * @return $this
    */
    public function setCustomPage($customPage)
    {
        $this->container['customPage'] = $customPage;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  “重定向”页面URL
    *
    * @return string|null
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string|null $redirectUrl “重定向”页面URL
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
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

