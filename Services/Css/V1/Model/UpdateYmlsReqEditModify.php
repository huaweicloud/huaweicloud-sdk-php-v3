<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateYmlsReqEditModify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateYmlsReqEditModify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elasticsearchYml  **参数解释**： 参数配置列表，值为需要修改的json数据，OpenSearch集群也使用此参数，即修改opensearch.yml时，这里也是填写elasticsearch.yml。 **约束限制**： 不涉及
    * kibanaYml  **参数解释**： 参数配置列表，值为需要修改的json数据。OpenSearch集群也使用此参数，即修改opensearch_dashboards.yml时，这里也是填写kibana.yml。 **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elasticsearchYml' => 'object',
            'kibanaYml' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elasticsearchYml  **参数解释**： 参数配置列表，值为需要修改的json数据，OpenSearch集群也使用此参数，即修改opensearch.yml时，这里也是填写elasticsearch.yml。 **约束限制**： 不涉及
    * kibanaYml  **参数解释**： 参数配置列表，值为需要修改的json数据。OpenSearch集群也使用此参数，即修改opensearch_dashboards.yml时，这里也是填写kibana.yml。 **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elasticsearchYml' => null,
        'kibanaYml' => null
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
    * elasticsearchYml  **参数解释**： 参数配置列表，值为需要修改的json数据，OpenSearch集群也使用此参数，即修改opensearch.yml时，这里也是填写elasticsearch.yml。 **约束限制**： 不涉及
    * kibanaYml  **参数解释**： 参数配置列表，值为需要修改的json数据。OpenSearch集群也使用此参数，即修改opensearch_dashboards.yml时，这里也是填写kibana.yml。 **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elasticsearchYml' => 'elasticsearch.yml',
            'kibanaYml' => 'kibana.yml'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elasticsearchYml  **参数解释**： 参数配置列表，值为需要修改的json数据，OpenSearch集群也使用此参数，即修改opensearch.yml时，这里也是填写elasticsearch.yml。 **约束限制**： 不涉及
    * kibanaYml  **参数解释**： 参数配置列表，值为需要修改的json数据。OpenSearch集群也使用此参数，即修改opensearch_dashboards.yml时，这里也是填写kibana.yml。 **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'elasticsearchYml' => 'setElasticsearchYml',
            'kibanaYml' => 'setKibanaYml'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elasticsearchYml  **参数解释**： 参数配置列表，值为需要修改的json数据，OpenSearch集群也使用此参数，即修改opensearch.yml时，这里也是填写elasticsearch.yml。 **约束限制**： 不涉及
    * kibanaYml  **参数解释**： 参数配置列表，值为需要修改的json数据。OpenSearch集群也使用此参数，即修改opensearch_dashboards.yml时，这里也是填写kibana.yml。 **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'elasticsearchYml' => 'getElasticsearchYml',
            'kibanaYml' => 'getKibanaYml'
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
        $this->container['elasticsearchYml'] = isset($data['elasticsearchYml']) ? $data['elasticsearchYml'] : null;
        $this->container['kibanaYml'] = isset($data['kibanaYml']) ? $data['kibanaYml'] : null;
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
    * Gets elasticsearchYml
    *  **参数解释**： 参数配置列表，值为需要修改的json数据，OpenSearch集群也使用此参数，即修改opensearch.yml时，这里也是填写elasticsearch.yml。 **约束限制**： 不涉及
    *
    * @return object|null
    */
    public function getElasticsearchYml()
    {
        return $this->container['elasticsearchYml'];
    }

    /**
    * Sets elasticsearchYml
    *
    * @param object|null $elasticsearchYml **参数解释**： 参数配置列表，值为需要修改的json数据，OpenSearch集群也使用此参数，即修改opensearch.yml时，这里也是填写elasticsearch.yml。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setElasticsearchYml($elasticsearchYml)
    {
        $this->container['elasticsearchYml'] = $elasticsearchYml;
        return $this;
    }

    /**
    * Gets kibanaYml
    *  **参数解释**： 参数配置列表，值为需要修改的json数据。OpenSearch集群也使用此参数，即修改opensearch_dashboards.yml时，这里也是填写kibana.yml。 **约束限制**： 不涉及
    *
    * @return object|null
    */
    public function getKibanaYml()
    {
        return $this->container['kibanaYml'];
    }

    /**
    * Sets kibanaYml
    *
    * @param object|null $kibanaYml **参数解释**： 参数配置列表，值为需要修改的json数据。OpenSearch集群也使用此参数，即修改opensearch_dashboards.yml时，这里也是填写kibana.yml。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setKibanaYml($kibanaYml)
    {
        $this->container['kibanaYml'] = $kibanaYml;
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

