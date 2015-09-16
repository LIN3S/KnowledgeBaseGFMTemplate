#GFM Template for LIN3S KnowledgeBase

##Installation

    composer require lin3s/knowledge-base-gfm-template
    
If you are using the standalone PHP component pass the template as third parameter to the configuration. Check Knowledge
Base document for further info.

If you are using symfony bundle add the following to the `config.yml`:

    lin3_s_knowledge_base:
        template: LIN3S\KnowledgeBaseGFMTemplate\Template
